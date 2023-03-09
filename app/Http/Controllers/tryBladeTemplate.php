<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tryBladeTemplate extends Controller
{
    function index() {
        return view("page/index");
    }
    function about() {
        $data = [
            'judul' => 'Its About Page',
            'kontak' => [
                'email' => 'abc@mhs.dinus.ac.id',
                'ig' => '@abc_cde'
            ]
        ];
        return view("page/about")->with($data);
    }
    function contact() {
        $kontak = 'Its Contact Page';
        return view("page/contact")->with('judul_halaman', $kontak);
    }
}
