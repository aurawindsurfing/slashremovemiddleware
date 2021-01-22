<?php

namespace Aurawindsurfing\SlashRemoveMiddleware;

use Closure;
use Illuminate\Support\Facades\Redirect;

class SlashRemoveMiddleware
{
    public function handle($request, Closure $next)
    {
        if (preg_match('/.+\/$/', $request->getRequestUri())) {
            return Redirect::to(rtrim($request->getRequestUri(), '/'), 301);
        }

        return $next($request);
    }
}
