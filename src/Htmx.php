<?php

namespace alkemann\htmx;

use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class Htmx implements MiddlewareInterface
{

	// PSR
	public function process(
		ServerRequestInterface $request,
		RequestHandlerInterface $handler): ResponseInterface
	{
		return $handler->handle($request);
	}

	// Generic & Laravel compliant
	public function handle($request, $next)
	{
		return $next($reqeust);
	}
}
