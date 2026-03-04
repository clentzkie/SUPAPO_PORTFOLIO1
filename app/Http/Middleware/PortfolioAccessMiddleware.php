<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // <--- Ito ang nagpapatanggal ng pula
use Symfony\Component\HttpFoundation\Response;

class PortfolioAccessMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Requirement 4: Log access (Example usage)
        Log::info('May bumisita sa iyong Portfolio! IP Address: ' . $request->ip()); 

        return $next($request);
    }
}