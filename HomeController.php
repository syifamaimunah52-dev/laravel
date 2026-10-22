<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Data dummy dulu biar gak perlu DB, nanti ganti Villa::all()
        $villas = [
            ['id' => 1, 'nama' => 'Villa Sawah A', 'harga' => 750000, 'status' => 'Ready', 'foto' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9', 'fasilitas' => '3 Kamar, Kolam Renang'],
            ['id' => 2, 'nama' => 'Villa Sawah B', 'harga' => 850000, 'status' => 'Ready', 'foto' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945', 'fasilitas' => '2 Kamar, View Sawah'],
            ['id' => 3, 'nama' => 'Villa Keluarga', 'harga' => 1200000, 'status' => 'Booked', 'foto' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b', 'fasilitas' => '4 Kamar, BBQ Area'],
            ['id' => 4, 'nama' => 'Villa Minimalis', 'harga' => 600000, 'status' => 'Ready', 'foto' => 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4', 'fasilitas' => '2 Kamar, Minimalis'],
        ];

        return view('home', compact('villas'));
    }

    public function show($id)
    {
        return "Halaman detail villa ID: " . $id . " - nanti disini ada kalender";
    }
}