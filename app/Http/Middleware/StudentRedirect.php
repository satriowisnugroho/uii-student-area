<?php namespace App\Http\Middleware;

use Closure;
use Auth;

class StudentRedirect {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if (Auth::user()) {
			return $next($request);
		}
		return view('auth.login')->withErrors('Anda harus login terlebih dahulu');

	}

}
