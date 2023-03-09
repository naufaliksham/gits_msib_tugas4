@extends('layout/application') {{-- mengambil template dasar application.blade.php --}}

@section('konten') {{-- akan dimasukan ke @yield('konten') sesuai isi dibawah ini--}}
<h1>{{ $judul }}</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis rem dolorem perferendis. 
    Nisi error praesentium asperiores perferendis nam non necessitatibus!</p>
<p>
    <ul>
        <li>Email = {{ $kontak['email'] }}</li>
        <li>Instagram = {{ $kontak['ig'] }}</li>
    </ul>
</p>
@endsection