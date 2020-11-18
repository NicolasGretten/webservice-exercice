<?php
namespace App\Http\Middleware;

use Closure;

use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class RoleAuthorizationMiddleware
{
    public function handle($request, Closure $next, ...$roles)
    {
        try {
            $token = JWTAuth::parseToken();
            $user = $token->authenticate();
        }
        catch (TokenExpiredException $e) {
            return $this->unauthorized();
        }
        catch (TokenInvalidException $e) {
            return $this->unauthorized();
        }
        catch (JWTException $e) {
            return $this->unauthorized();
        }

        // Add whitemark role to all routes
        // todo : voir ca
        array_push($roles, 'whitemark');

        if ($user && sizeof(array_intersect(explode(',', $user->role), $roles))) {
            return $next($request);
        }

        return $this->unauthorized();
    }

    private function unauthorized($message = null)
    {
        return response('You are unauthorized to access this resource', 401);
    }
}
