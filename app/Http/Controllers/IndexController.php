<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IndexController extends ControllerBase
{
    public function __construct()
    {
    }

    /**
     * Main entry point
     *
     * @param Request $request
     *
     * @return JsonResponse
     *
     */
    public function index(Request $request): JsonResponse
    {
        return response()->json('Please read the API documentation at ' . env('APP_URL') . '/docs', 200);
    }
}
