<?php

namespace App\Http\Middleware;

use App\Support\Redirect;
use App\Support\RequestInput;
use Slim\Psr7\Factory\ResponseFactory;
use Psr\Http\Server\RequestHandlerInterface as Handle;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Routing\RouteContext;

/**
 * Middleware Must Also Be Registered To HttpKernel or Registered on specific routes
 **/
class RouteContextMiddleware
{
    public function __invoke(Request $request, Handle $handler)
    {
        $route = RouteContext::fromRequest($request)->getRoute();

        throw_when(empty($route), "Route not found in request");

        app()->bind(Redirect::class, fn (ResponseFactory $factory) => new Redirect($factory));

        $input = new RequestInput($request, $route);
        app()->bind(RequestInput::class, $input);

        return $handler->handle($request);
    }
}