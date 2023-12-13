<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function store() {
        auth()->logout();
        auth()->guard('estudiante')->logout();
        return redirect()->route('login');
    }
}
