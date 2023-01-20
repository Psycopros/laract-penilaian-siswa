<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrator;
use App\Models\guru;
use App\Models\siswa;
use App\Models\user;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
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

    public function loginAdmin(Request $request)
    {
        $admin = Administrator::where('id_admin', $request->idAdmin)->where('password', $request->password)->first();

       if (!$admin) return back()->with('error',"Kode admin Atau Password Salah");
        
       $admin->role = 'Admin';
       session(['user' => $admin]);

       return redirect('/home');
    }
}
