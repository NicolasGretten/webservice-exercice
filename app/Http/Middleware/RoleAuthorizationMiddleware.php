<?php
namespace App\Http\Middleware;

use App\Traits\JwtTrait;
use Closure;

use Illuminate\Support\Facades\Crypt;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class RoleAuthorizationMiddleware
{
    use JwtTrait;

    public function handle($request, Closure $next, ...$roles)
    {
        try {
            $token = JWTAuth::parseToken();
            $user = $token->authenticate();
        }
        catch(TokenExpiredException $e) {
            return $this->unauthorized();
        }
        catch(TokenInvalidException $e) {
            return $this->unauthorized();
        }
        catch(JWTException $e) {
            return $this->unauthorized();
        }

        /*
         * User logged from local database
         */
        if ($user && sizeof(array_intersect(explode(',', $user->role), $roles))) {
            return $next($request);
        }

        /*
         * User logged from another API
         */
        if(sizeof(array_intersect(explode(',', $this->jwt('profile')->get('role')), $roles))) {
            return $next($request);
        }

        return $this->unauthorized();
    }

    private function unauthorized($message = null)
    {
        return response('You are unauthorized to access this resource.', 401);
    }
}
