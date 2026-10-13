<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index()
{
    $latest = [
        'title'    => 'Khulafaur Rasyidin',
        'synopsis' => 'Khulafaur Rasyidin adalah serial komik yang menceritakan kisah para sahabat Nabi Muhammad SAW yang menjadi pemimpin umat Islam setelah beliau wafat. Serial ini mengangkat nilai-nilai kepemimpinan, keadilan, dan keteladanan dari para khalifah pertama dalam sejarah Islam.',
        'cover'    => 'images/komik.jpg',
    ];

    return view('home', compact('latest'));
}
}
