<?php

namespace App\Http\Middleware;

use App\Models\RouteVisitor;
use Closure;
use Illuminate\Http\Request;

class VisitorCounter
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('unique_id')) {
            session([
                'unique_id' => uniqid()
            ]);
        }
        $id = session('unique_id');
        if (!RouteVisitor::where('unique_id',$id)->where('route',url()->current())->first()){
            RouteVisitor::create([
                'route' => url()->current(),
                'unique_id' => $id
            ]);
        }
        return $next($request);
    }
}
