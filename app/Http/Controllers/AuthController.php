<?php

namespace App\Http\Controllers;

use App\Jobs\QueryJob;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AuthController extends ControllerBase
{
    public function __construct() {
        $this->middleware('auth', [
            'except' => ['login', 'passwordForgotten', 'passwordReset']
        ]);

        $this->middleware('auth.role:admin', [
            'except' => ['login', 'passwordForgotten', 'passwordReset']
        ]);
    }

    /**
     * Login
     *
     * User login to all authorized APIs.
     *
     * @responseFile responses/auth/login.json
     *
     * @group API Authentication
     *
     * @bodyParam   username    string  required    username  Example: john.doe@example.com
     * @bodyParam   password    string  required    password  Example: john
     *
     * @param Request $request
     *
     * @return JsonResponse
     * @throws ValidationException
     *
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only(['username', 'password']);

        if (!$token = Auth::attempt($credentials)) {
            return response()->json(['message' => 'You are unauthorized to access this resource'], 401);
        }

        $token = auth()->setTTL(env('JWT_TTL'))->attempt($credentials);

        return response()->json([
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL(),
            'user' => auth()->user()

        ], 200);
    }

    /**
     * Logout
     *
     * User logout from all authorized APIs.
     *
     * @responseFile responses/auth/logout.json
     *
     * @authenticated
     *
     * @group API Authentication
     *
     * @header  Authorization Bearer {{token}}
     *
     * @return JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out'], 200);
    }

    /**
     * Retrieve users list
     *
     * Retrieve the list of authorized users on the various APIs of GOWORK&CO.
     *
     * <aside class="warning"><strong>Only authenticated users with administrator rights can manage users.</strong></aside>
     *
     * @responseFile responses/auth/list.json
     *
     * @authenticated
     *
     * @group API Account management
     *
     * @header  Authorization Bearer {{token}}
     *
     * @return JsonResponse
     */
    public function list()
    {
        $users['active'] = User::all()->sortBy('username')->values();
        $users['deleted'] = User::onlyTrashed()->get()->sortBy('username')->values();

        return response()->json($users, 200);
    }

    /**
     * Create a new user
     *
     * Allows you to create a new user and assign him a role on one or more APIs.
     *
     * <aside class="warning"><strong>Only authenticated users with administrator rights can manage users.</strong></aside>
     *
     * <aside>
     * The value of the "role" parameter is defined by the name of the API followed by ".user". For example, to add user rights to the payment and booking APIs you must set the role to: "payment.user, booking.user" or to add a global administrator, you must set the role to: "admin".
     * </aside>
     *
     * @responseFile responses/auth/create.json
     *
     * @authenticated
     *
     * @group API Account management
     *
     * @header  Authorization Bearer {{token}}
     *
     * @queryParam      username                required    Username to create          Example: john.doe@goworkandco.com
     * @queryParam      password                required    New user password           Example: FjepA48dez4DE196
     * @queryParam      password_confirmation   required    Confirm new user password   Example: FjepA48dez4DE196
     * @queryParam      role                    required    User role                   Example: customer
     *
     * @param Request $request
     *
     * @return JsonResponse
     * @throws ValidationException
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|unique:users',
            'password' => 'required|confirmed',
            'role'     => 'required|string',
        ]);

        try
        {
            $user = new User;
            $user->id = substr('usr_' . md5(Str::uuid()),0 ,25);
            $user->username = $request->input('username');
            $user->password = app('hash')->make($request->input('password'));
            $user->role     = preg_replace("/\s+/", "", $request->input('role'));
            $user->save();

            return response()->json($user, 201);

        }
        catch (Exception $e)
        {
            return response()->json($e->getMessage(), 409);
        }
    }

    /**
     * Update an user
     *
     * You can change the password and user role.
     *
     * <aside class="warning"><strong>Only authenticated users with administrator rights can manage users.</strong></aside>
     *
     * <aside>
     * The value of the "role" parameter is defined by the type of user. Is allowed : admin, customer.
     * </aside>
     *
     * @responseFile responses/auth/update.json
     *
     * @authenticated
     *
     * @group API Account management
     *
     * @header  Authorization Bearer {{token}}
     *
     * @urlParam     id    required    User ID    Example: usr_155a4fcfdeb5ac161a3e5
     *
     * @queryParam      password                            New user password           Example: FjepA48dez4DE196
     * @queryParam      password_confirmation   required    Confirm user password       Example: FjepA48dez4DE196
     * @queryParam      new_username                        New username                Example: doe.john@example.com
     * @queryParam      role                                User role                   Example: customer
     *
     * @param Request $request
     *
     * @return JsonResponse
     * @throws ValidationException
     */
    public function update(Request $request)
    {
        // Check role (admin, customer...)
        $this->validate($request, [
            'role'          => 'required_without_all:password,new_username',
            'password'      => 'required_without_all:role,new_username|confirmed',
            'new_username'  => 'required_without_all:role,password'
        ]);

        try
        {
            $user = User::find($request->id);
            if(empty($user)) {
                throw new Exception('User does not exist', 404);
            }

            if(! empty($request->input('password'))) {
                $user->password = app('hash')->make($request->input('password'));
            }

            if(! empty($request->input('role'))) {
                $user->role = $request->input('role');
            }

            if(! empty($request->new_username)) {
                if(! empty(User::find($request->new_username))) {
                    throw new Exception('Username already exists', 409);
                }

                $user->username = $request->new_username;
            }

            $user->update();

            return response()->json($user, 201);

        }
        catch (Exception $e)
        {
            return response()->json($e->getMessage(), 409);
        }
    }

    /**
     * Delete user
     *
     * Remove a user from all APis.
     *
     * <aside class="warning"><strong>Only authenticated users with administrator rights can manage users.</strong></aside>
     *
     * @responseFile responses/auth/delete.json
     *
     * @authenticated
     *
     * @group        API Account management
     *
     * @header       Authorization Bearer {{token}}
     *
     * @urlParam     id    required    User ID    Example: usr_155a4fcfdeb5ac161a3e5
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function delete(Request $request)
    {
        try {
            $user = User::find($request->id);

            if(empty($user))
            {
                throw new Exception('User does not exist', 404);
            }

            if(strtolower($user->id) === strtolower($request->id)) {
                throw new Exception('You cannot delete yourself', 409);
            }

            $user->delete();

            return response()->json($user, 200);
        }
        catch(Exception $e)
        {
            return response()->json($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Restore user
     *
     * Restore a user from all APis.
     *
     * <aside class="warning"><strong>Only authenticated users with administrator rights can manage users.</strong></aside>
     *
     * @responseFile responses/auth/restore.json
     *
     * @authenticated
     *
     * @group API Account management
     *
     * @header  Authorization Bearer {{token}}
     * @urlParam id     required    User ID     Example: usr_155a4fcfdeb5ac161a3e5
     *
     * @param Request $request
     * @headerParam Authorization string someFeature
     *
     * @return JsonResponse
     */
    public function restore(Request $request)
    {
        try {
            $user = User::onlyTrashed()->find($request->id);

            if(empty($user))
            {
                throw new Exception('User does not exist or is already active', 404);
            }

            $user->restore();

            return response()->json($user, 200);
        }
        catch(Exception $e)
        {
            return response()->json($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Password forgotten
     *
     * Generate a token sent by email to create a new password.
     *
     * @responseFile responses/auth/password-forgotten.json
     *
     * @group API Account management
     *
     * @queryParam      username                required    Username to restore password          Example: john.doe@goworkandco.com
     *
     * @param Request $request
     *
     * @return JsonResponse
     * @throws ValidationException
     */
    public function passwordForgotten(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string'
        ]);

        try
        {
            $user = User::where('username', $request->username)->first();

            if(empty($user))
            {
                throw new Exception('User does not exist', 404);
            }

            $tokenDuration = 15; // minutes

            $user->password_forgotten_token_limit = Carbon::now()->addMinutes($tokenDuration);
            $user->password_forgotten_token       = md5(Str::uuid());

            $user->update();

            /*
             * Send mail to user
             */
            $job = dispatch(new QueryJob([
                'task' => 'password-forgotten',
                'request' => [
                    'user-id' => $user->id,
                    'role' => $user->role,
                    'mail' => $user->username,
                    'token' =>  $user->password_forgotten_token,
                    'token_duration' => $tokenDuration
                ]
            ]))->onQueue('mail');

            return response()->json([
                'send-to' => $user->username,
                'token_duration' => $tokenDuration
            ], 200);

        }
        catch (Exception $e)
        {
            return response()->json($e->getMessage(), 409);
        }
    }

    /**
     * Password reset
     *
     * Create a new password for the user with the token retrieved by the "Password forgotten" route.
     *
     * @responseFile responses/auth/password-reset.json
     *
     * @group API Account management
     *
     * @queryParam      username                required    Username to restore password          Example: john.doe@goworkandco.com
     * @queryParam      password                required    New user password                     Example: FjepA48dez4DE196
     * @queryParam      password_confirmation   required    Confirm new user password             Example: FjepA48dez4DE196
     * @queryParam      token                   required    Password token                        Example: 2d1cb7f9f717507a7b421e1ca0032835
     *
     * @param Request $request
     *
     * @return JsonResponse
     * @throws ValidationException
     */
    public function passwordReset(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string',
            'token'    => 'required|string',
            'password' => 'required|string|confirmed'
        ]);

        try
        {
            $user = User::where('username', $request->username)
                ->where('password_forgotten_token', $request->token)
                ->where('password_forgotten_token_limit', '>', Carbon::now())
                ->first();

            if(empty($user))
            {
                throw new Exception("User or token doesn't not exist", 404);
            }

            $user->password = app('hash')->make($request->input('password'));
            $user->password_forgotten_token_limit = null;
            $user->password_forgotten_token       = null;
            $user->update();

            /*
             * Send mail to user
             */
            $job = dispatch(new QueryJob([
                'task' => 'password-reset',
                'request' => [
                    'role' => $user->role,
                    'mail' => $user->username
                ]
            ]))->onQueue('mail');

            return response()->json([], 200);
        }
        catch (Exception $e) {
            return response()->json($e->getMessage(), 409);
        }
    }

    /**
     * Retrieve user information
     *
     * Get all user details of a user.
     *
     * @responseFile responses/auth/retrieve.json
     *
     * @authenticated
     *
     * @group API Account management
     *
     * @header  Authorization Bearer {{token}}
     *
     * @urlParam     id    required    User ID    Example: usr_155a4fcfdeb5ac161a3e5
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function retrieve(Request $request) {
        try {
            $user = User::find($request->id);

            if(empty($user)) {
                throw new Exception('User does not exist', 404);
            }

            return response()->json($user, 200);

        }
        catch (Exception $e) {
            return response()->json($e->getMessage(), 409);
        }
    }
}
