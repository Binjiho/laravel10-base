<?php

namespace App\Http\Middleware\Site;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // 로그인 체크
        if (thisAuth()->check()) {
            return $next($request);
        }

        // ajax 요청이아니라면
        if (!$request->ajax() && checkUrl() == 'web') {
            // 현재 URL을 세션에 저장
            session(['previous_url' => $request->url()]);
        }

        return authRedirect();
    }
}
