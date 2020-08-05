<?php

namespace App\Http\Controllers;

class ExampleController extends ControllerBase
{
    public function __construct() {
        $this->middleware('auth', [
                'except' => ['login']]
        );

        $this->middleware('auth.role:user', [
            'except' => ['login']
        ]);
    }

    public function example() {
        return response()->json(['Hello world !']);
    }
}
