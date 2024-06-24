<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class MeasureRequestTime
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     * @throws Exception
     */
    public function handle(Request $request, Closure $next)
    {
        $start = time();

        $response = $next($request);

        $end = time();
        $duration = $end - $start;

        if ($duration > 10) {
        Log::warning('Request took longer than 10 seconds.', [
        'url' => $request->fullUrl(),
        'duration' => $duration,
        ]);

        throw new Exception('Request took longer than 10 seconds.');
}

        return $response;
    }
}
