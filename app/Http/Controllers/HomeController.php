<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index()
{
    $latest = [
        'title'    => 'Judul Komik Terbaru',
        'synopsis' => 'Sinopsis singkat yang bikin orang penasaran.',
        'cover'    => 'images/komik.jpg',
    ];

    return view('home', compact('latest'));
}
}
