<?php

namespace App\Http\Controllers;

use App\Models\coffe;
use Illuminate\Http\Request;

class tryController extends Controller
{
    function index() {
        // $data = coffe::all();
        $data = coffe::orderBy('harga', 'asc')->paginate(4);
        return view('assignment/index')->with('data', $data);
    }
    function detail($nama) {
        $name = coffe::all();
        return "<h1>Pilihanmu adalah $nama</h1>";
    }
}
