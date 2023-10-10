<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function akademik() {
        return view('laporan/akademik', [
            'active' => 'laporan'
        ]);
    }

    public function sikap() {
        return view('laporan/sikap', [
            'active' => 'laporan'
        ]);
    }

    public function eskul() {
        return view('laporan/eskul', [
            'active' => 'laporan'
        ]);
    }
}
