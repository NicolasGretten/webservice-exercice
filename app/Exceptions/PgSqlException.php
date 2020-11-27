<?php
namespace App\Exceptions;

use Bugsnag\BugsnagLaravel\Facades\Bugsnag;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PDOException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class PgSqlException extends PDOException
{
    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @return void
     *
     */
    public function report()
    {
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @return Response|JsonResponse
     *
     */
    public function render()
    {
        if(strstr($this->getMessage(), 'PDOException: SQLSTATE[')) {
            if(preg_match('/SQLSTATE\[(\w+)\]:(.*):(\s+\d)(.*):(.*)/', $this->getMessage(), $matches) === false) {
                $this->message = 'Generic SQL exception unhandled';
            }
            else {
                $this->message = empty($matches[5]) ? 'Generic SQL exception unhandled' : trim($matches[5]);
            }
        }
        else {
            $this->message = 'Generic SQL exception unhandled';
        }

        return response()->json(['message' => $this->getMessage()], 409);
    }
}
