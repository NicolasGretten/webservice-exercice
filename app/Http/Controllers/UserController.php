<?php

namespace App\Http\Controllers;

use App\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Config\Definition\Exception\Exception;

class UserController extends ControllerBase
{
    /**
     * Register a new user
     *
     * Register a new user.
     *
     * @group Users
     *
     * @bodyParam name                      required        Name                        Example: John Doe
     * @bodyParam email                     required        Email                       Example: John@doe.com
     * @bodyParam password                  required        Password                    Example: 1234
     * @bodyParam password_confirmation     required        Password confirmation       Example: 1234
     *
     * @responseFile /responses/users/register.json
     *
     * @param Request $request
     * @return JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function register(Request $request): JsonResponse
    {
        try {
            $this->validate($request, [
                'name' => 'required|string',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed',
            ]);

            DB::beginTransaction();

            $user = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = app('hash')->make($request->input('password'));

            $user->save();

            DB::commit();

            return response()->json($user, 201);

        } catch(ValidationException $e){
            return response()->json($e->getMessage(), 409);
        } catch(Exception $e){
            return response()->json($e->getMessage(), 500);
        }
    }

    /**
     * Login a user
     *
     * Login a user.
     *
     * @group Users
     *
     * @bodyParam email         required        Email           Example: john@doe.com
     * @bodyParam password      required        password        Example:1234
     *
     * @responseFile /responses/users/signIn.json
     *
     * @param Request $request
     * @return JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function signIn(Request $request): JsonResponse
    {
        try {
            $this->validate($request, [
                'email' => 'required|string',
                'password' => 'required|string',
            ]);

            $credentials = $request->only(['email', 'password']);

            if (! $token = Auth::attempt($credentials)) {
                return response()->json(['message' => 'Unauthorized'], 401);
            }

            return response()->json(['status'=>'Connected',  'credentials'=>$this->respondWithToken($token)->getOriginalContent()], 200);

        } catch(ValidationException $e){
            return response()->json($e->getMessage(), 409);
        } catch(Exception $e){
            return response()->json($e->getMessage(), 500);
        }
    }
}
