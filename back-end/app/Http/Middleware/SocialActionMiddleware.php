<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SocialActionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $isSocialAction = User::where('profile', 'social_action')->exists();

        if (!$isSocialAction) {
            return response([
                'message' => 'User is not social action.'
            ], 401);
        }

        return $next($request);
    }
}
