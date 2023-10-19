<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade::all(); // Mengambil data dari model Grade (sesuai dengan model yang sesuai)

        return view('laporan.nilai.index', [
            'active' => 'laporan',
            'grades' => $grades, // Mengirimkan data grades ke view
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporan.nilai.create', [
            'active' => 'laporan',
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
        $request->validate([
            'nama' => 'required',
            'nilai' => 'required|numeric',
            'jurusan' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $data = Grade::create([
            'nama' => $request->nama,
            'nilai' => $request->nilai,
            'jurusan' => $request->jurusan,
            // tambahkan kolom lain yang perlu disimpan di sini
        ]);
    
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotosiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
    
        return redirect()->route('nilai.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $grade = Grade::findOrFail($id);
    return view('laporan.nilai.edit', [
        'active' => 'laporan',
        'grade' => $grade
    ]);
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required',
        'nilai' => 'required|numeric',
        'jurusan' => 'required',
        'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Anda dapat mengizinkan pembaruan foto menjadi opsional
    ]);

    $grade = Grade::findOrFail($id); // Menggunakan findOrFail untuk memastikan entitas dengan ID yang diberikan ada

    $grade->nama = $request->nama;
    $grade->nilai = $request->nilai;
    $grade->jurusan = $request->jurusan;

    if ($request->hasFile('foto')) {
        $request->file('foto')->move('fotosiswa/', $request->file('foto')->getClientOriginalName());
        $grade->foto = $request->file('foto')->getClientOriginalName();
    }

    $grade->save();

    return redirect()->route('nilai.index')->with('success', 'Data berhasil diperbarui!');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        //
    }
}
