<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10|max:1000',
            'website' => 'nullable|string', // Kolom jebakan untuk bot
        ]);

        // Proses penyimpanan data kontak (misalnya, kirim email atau simpan ke database)
        // ...

        return redirect()->back()->with('sent', true);
    }
}
