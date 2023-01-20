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

    public function loginGuru(Request $request)
    {
        $guru = Guru::where('nip', $request->nip)->where('password', $request->password)->first();

       if (!$guru) return back()->with('error',"NIP Atau Password Salah");
        
       $guru->role = 'guru';
       session(['user' => $guru]);

       return redirect('/home');
    }

    public function loginSiswa(Request $request)
    {
        $siswa = Siswa::where('nis', $request->nis)->where('password', $request->password)->first();

       if (!$siswa) return back()->with('error',"Nis Atau Password Salah");
        
       $siswa->role = 'siswa';
       session(['user' => $siswa]);

       return redirect('/home');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
