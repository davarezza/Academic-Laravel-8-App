<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Http\Requests\ContactRequest;

class GuestController extends Controller
{
    public function index() {
        $grades = Grade::all();

        return view('home', [
            'active' => 'home',
            'grades' => $grades
        ]);
    }

    public function aboutme() {
        return view('aboutme', [
            'active' => 'aboutme'
        ]);
    }

    public function about() {
        return view('about', [
            'active' => 'about'
        ]);
    }

    public function contact() {
        return view('contact', [
            'active' => 'contact'
        ]);
    }

    public function message()
    {
        $data = session('data'); 
    
        if (!$data) {
            return redirect()->route('contact');
        }
    
        return view('message', [
            'active' => 'message',
            'data' => $data, 
        ]);
    }

    public function send(ContactRequest $request)
    {
        // Simpan data dalam session
        $data = [
            'nama' => $request->input('name'),
            'email' => $request->input('email'),
            'pesan' => $request->input('message'),
        ];

        session()->flash('data', $data);

        return redirect()->route('message');
    }    

}
