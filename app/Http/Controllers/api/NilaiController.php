<?php

namespace App\Http\Controllers\api;

use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataNilai = Grade::all();
        return response()->json([
            'status' => true,
            'message' => 'Data ditemukan',
            'data' => $dataNilai
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataNilai = new Grade();

        $rules = [
            'nama' => 'required',
            'nilai' => 'required|numeric',
            'jurusan' => 'required|in:rekayasa perangkat lunak,teknik komputer dan jaringan,desain komunikasi visual,teknik mekatronika',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal memasukkan data',
                'data' => $validator->errors()
            ],400);
        }

        $dataNilai->nama = $request->nama;
        $dataNilai->nilai = $request->nilai;
        $dataNilai->jurusan = $request->jurusan;

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotosiswa/', $request->file('foto')->getClientOriginalName());
            $dataNilai->foto = $request->file('foto')->getClientOriginalName();
            $dataNilai->save();
        }

        return response()->json([
            'status' => true,
            'message' => 'Berhasil menambahkan data',
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataNilai = Grade::find($id);
        if (empty($dataNilai)) {
            return response()->json([
                'status' => false,
                'data' => 'Data tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Data berhasil ditemukan',
            'data' => $dataNilai,
        ],200);
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
    $dataNilai = Grade::find($id);
    if (empty($dataNilai)) {
        return response()->json([
            'status' => false,
            'data' => 'Data tidak ditemukan'
        ], 404);
    }

    $rules = [
        'nama' => 'required',
        'nilai' => 'required|numeric',
        'jurusan' => 'required|in:rekayasa perangkat lunak,teknik komputer dan jaringan,desain komunikasi visual,teknik mekatronika',
        'foto' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048', // Add file validation rules
    ];

    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
        return response()->json([
            'status' => false,
            'message' => 'Gagal memasukkan data',
            'data' => $validator->errors()
        ], 400);
    }

    $dataNilai->nama = $request->nama;
    $dataNilai->nilai = $request->nilai;
    $dataNilai->jurusan = $request->jurusan;

    if ($request->hasFile('foto')) {
        // Delete existing photo if any
        if ($dataNilai->foto) {
            unlink('fotosiswa/' . $dataNilai->foto);
        }

        // Move and save the new photo
        $request->file('foto')->move('fotosiswa/', $request->file('foto')->getClientOriginalName());
        $dataNilai->foto = $request->file('foto')->getClientOriginalName();
    }

    $dataNilai->save();

    return response()->json([
        'status' => true,
        'message' => 'Berhasil mengedit data',
    ], 200);
}



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataNilai = Grade::find($id);
        if (empty($dataNilai)) {
            return response()->json([
                'status' => false,
                'data' => 'Data tidak ditemukan'
            ], 404);
        }

        $dataNilai->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses menghapus data'
        ]);
    }
}
