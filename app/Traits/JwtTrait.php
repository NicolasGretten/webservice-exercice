<?php

namespace App\Traits;

use Illuminate\Support\Facades\Crypt;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

trait JwtTrait
{
    /*
     * Retrieve JWT Profile
     */
    public function getJwtProfile() {
        $payload = JWTAuth::parseToken()->getPayload();

        if(empty($payload->get('profile'))) {
            throw new JWTException('Profile payload not found in JWT token.', 409);
        }

        return (object) Crypt::decrypt($payload->get('profile'));
    }
}
