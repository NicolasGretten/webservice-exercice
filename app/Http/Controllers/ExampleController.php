<?php

namespace App\Http\Controllers;

class ExampleController extends ControllerBase
{
    public function __construct() {

    }

    public function example() {
        return response()->json(['Hello world !']);
    }
}
