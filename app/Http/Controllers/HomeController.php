<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index()
{
    $clients = collect(range(1, 8))->map(fn ($n) => "[LOGO KLIEN $n]");

    return view('home', compact('clients'));
}
}
