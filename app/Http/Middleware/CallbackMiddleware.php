<?php

namespace App\Http\Middleware;

use App\Jobs\QueryJob;
use Closure;
use Exception;

class CallbackMiddleware
{
    private $factory;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Get the response
        $response = $next($request);

        /*
         * If previous job ask a callback response for another api
         */
        if(! empty($request->callback)) {
            try {
                $query = json_decode($request->callback);

                if(json_last_error()) {
                    throw new Exception(json_last_error_msg(), 400);
                }

                if(empty($query->callback)) {
                    throw new Exception('callback not found');
                }

                dispatch(new QueryJob([
                    'task_action' => $query->callback->task_action,
                    'request'     => array_merge((array) $query->callback->request, ['success' => $response->status() >= 400 ? false : true]),
                    'callback'    => empty($query->callback->callback) ? null : $query->callback->callback
                ]))->onQueue($query->callback->on_queue);
            }
            catch (Exception $e) {
                return response()->json($e->getMessage(), empty($e->getCode()) ? 500 : $e->getCode());
            }

            return response()->json($query->callback, 200);
        }

        return $response;
    }
}
