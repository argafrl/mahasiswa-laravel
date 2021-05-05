<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]); 
    }

    public function detail()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.detail', ['mahasiswa' => $mahasiswa]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $mahasiswa = new Mahasiswa;
        // $mahasiswa->nim = $request->nim;
        // $mahasiswa->nama = $request->nama;
        // $mahasiswa->email = $request->email;
        // $mahasiswa->jurusan = $request->jurusan;
        // $mahasiswa->save();
        // return redirect('/');

        // Mahasiswa::create([
        //     'nama' => $request->nama,
        //     'nim' => $request->nim,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]); 
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        Mahasiswa::create($request->all());

        return redirect('/')
            ->with('success','Data Mahasiswa Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        // return view('mahasiswa.show', ['mahasiswa' => $mahasiswa]);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'email' => 'required',
            'jurusan' => 'required'
        ]);
        
        Mahasiswa::where('id', $id)
            ->update([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'email' => $request->email,
                'jurusan' => $request->jurusan,
            ]);
        return redirect('/')
            ->with('success','Data Mahasiswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $mahasiswa = Mahasiswa::findOrFail($id);
        Mahasiswa::destroy($id);
        return redirect('/')
            ->with('success','Data Mahasiswa Berhasil Dihapus!');
    }
}
