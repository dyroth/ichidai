<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Factory as AuthFactory;

class IsAdministrator
{

    public function __construct(AuthFactory $auth)
    {
        $this->auth = $auth;
    }
    public function handle($request, Closure $next, $guard = null, $field = null)
    {
        if (!$this->auth->guard($guard)->user()->admin) {
            return redirect(route('member.index'));
        }

        return $next($request);
    }
}
