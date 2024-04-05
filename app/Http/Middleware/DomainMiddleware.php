<?php

namespace App\Http\Middleware;

use App\Services\PlaceApi;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Symfony\Component\HttpFoundation\Response;

class DomainMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $placeApi = new PlaceApi($request);
        $placeInfo = $placeApi->getPlaceInfo();
        if(!$placeInfo) {
            abort(404);
        }

        $template = $placeInfo['template'] ?? 'default';
        Config::set('view.paths', [resource_path("views/layouts/$template")]);
        Config::set('app.template', $template);
        view()->share('placeInfo', $placeInfo);
        return $next($request);
    }
}
