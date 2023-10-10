<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index() {
        return view('home', [
            'active' => 'home'
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
