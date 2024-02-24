<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'nilai' => 'required|numeric|max:100',
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
                'nilai' => 'required|numeric|max:100',
                'jurusan' => 'required',
                'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
        
            $grade = Grade::findOrFail($id);
        
            // Cek apakah ada gambar baru yang dikirim
            if ($request->hasFile('foto')) {
                // Hapus gambar sebelumnya
                $oldImagePath = public_path('fotosiswa/' . $grade->foto);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
        
                // Simpan gambar yang baru diunggah
                $request->file('foto')->move('fotosiswa/', $request->file('foto')->getClientOriginalName());
                $grade->foto = $request->file('foto')->getClientOriginalName();
            }
        
            $grade->nama = $request->nama;
            $grade->nilai = $request->nilai;
            $grade->jurusan = $request->jurusan;
            $grade->save();
        
            return redirect()->route('nilai.index')->with('success', 'Data berhasil diperbarui!');
        }
        


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade, $id)
    {
        $grade = Grade::find($id);
    
        if ($grade) {
            // Hapus gambar jika ada
            if ($grade->foto) {
                $imagePath = public_path('fotosiswa/' . $grade->foto);
                
                if (file_exists($imagePath)) {
                    unlink($imagePath); // Hapus gambar dari direktori publik
                }
            }
    
            // Hapus data Grade
            $grade->delete();
    
            return redirect()->route('nilai.index')->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect()->route('nilai.index')->with('error', 'Data tidak ditemukan.');
        }
    }    
}
