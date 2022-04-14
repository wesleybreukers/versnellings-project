<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function auth(Request $request)
    {
        if ($request->isMethod('post')) {

        }

        return view('app.login');
    }

    public function dashboard()
    {
        return view('app.dashboard');
    }
}
