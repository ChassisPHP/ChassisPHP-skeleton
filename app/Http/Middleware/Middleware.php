<?php

namespace App\Http\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class Middleware
{
    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response,
        ?callable $next = null
    ) {
        if (!$next) {
            return $response;
        }

        // Determine if user is logged in
        // TODO write function to check
        // if user is logged in
        // and possibly check user level

        return $response;
    }
}
