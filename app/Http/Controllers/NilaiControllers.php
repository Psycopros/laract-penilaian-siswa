<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\Mengajar;


class NilaiControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (session('user')->role == 'guru') {
            $nilai = Nilai::whereHas('mengajar', function ($query){
                $query->where('guru_id', session('user')->id);
            })->get();
        } else {
            $nilai = Nilai::where('siswa_id',session('user')->id)->get();
        }
        return view('nilai.index', ['nilai' => $nilai]);

        // return view('nilai.index', [
        //     'nilai' =>Nilai::all()
        // ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nilai.create', [
            'mengajar' => Mengajar::all(),
            'siswa' => Siswa::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_nilai = $request->validate([
            'mengajar_id' => 'required',
            'siswa_id' => 'required',
            'uh' => 'required',
            'uts' => 'required',
            'uas' => 'required'
        ]);

        $data_nilai['na'] = ($request->uh + $request->uts + $request->uas) / 3;

        Nilai::create($data_nilai);
        return redirect('/nilai/index')->with('success', "Data Jurusan berhasil Di tambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Nilai $nilai)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Nilai $nilai)
    {
        return view('nilai.edit', [
            'nilai' => $nilai,
            'mengajar' => Mengajar::all(),
            'siswa' => Siswa::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Nilai $nilai)
    {
        $data_nilai = $request->validate([
            'mengajar_id' => 'required',
            'siswa_id' => 'required',
            'uh' => 'required',
            'uts' => 'required',
            'uas' => 'required'
        ]);

        $data_nilai['na'] = ($request->uh + $request->uts + $request->uas) / 3;

        $nilai->update($data_nilai);
        return redirect('/nilai/index')->with('success', "Data Jurusan berhasil Di edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nilai $nilai )
    {
       $nilai->delete();
       return redirect('/nilai/index')->with('success', "Data Jurusan berhasil Di edit");
    }
}
