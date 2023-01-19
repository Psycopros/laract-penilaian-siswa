<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{

    public function index(){
        if (session('user')) {
            return back();
        }
        return inertia::render('Login');
    }

    public function home(){
        return Inertia::render('Home');
    }
}
