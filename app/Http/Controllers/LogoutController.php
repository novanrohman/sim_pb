<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($guard)
    {
        if (Auth::guard($guard)->check()) {
            Auth::guard($guard)->logout();
            session()->flash('success', 'You have been logged out.');
            return redirect()->route('login');
        }
    }
}
