<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Laravel\Lumen\Http\ResponseFactory;

class ResponseMiddleware
{
    /**
     * The Response Factory our app uses
     *
     * @var ResponseFactory
     */
    protected $factory;

    /**
     * JsonMiddleware constructor.
     *
     * @param ResponseFactory $factory
     */
    public function __construct(ResponseFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure                 $next
     *
     * @return mixed
     * @throws Exception
     */
    public function handle($request, Closure $next)
    {
        $request->headers->set('Accept', 'application/json');

        // Get the response
        $response = $next($request);

        // Send response
        $returnData = [
            'timestamp' => Carbon::now()->getTimestamp(),
            'signature' => md5(json_encode($response->original)),
            'content' => [
                'success' => $response->status() >= 400 ? false : true,
                'async' => empty($response->headers->get('async')) ? false : (boolean) $response->headers->get('async') == true
            ]
        ];

        if(!empty($response->headers->get('pagination'))) {
            $returnData['content']['pagination'] = json_decode($response->headers->get('pagination'));
        }

        if(! empty($response->original)) {
            $returnData['content']['body'] = $response->status() >= 400 ? ['error' => $response->original] : $response->original;
        }

        /*
         * if a route was called with a callback from a job
         */
        return response()->json($returnData, $response->status());
    }
}
