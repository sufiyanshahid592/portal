<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class Minify
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        return $response;
    }

    protected function isResponseObject($response)
    {
        return is_object($response) && $response instanceof Response;
    }

    protected function isHtmlResponse(Response $response)
    {
        return strtolower(strtok($response->headers->get('Content-Type'), ';')) === 'text/html';
    }
}