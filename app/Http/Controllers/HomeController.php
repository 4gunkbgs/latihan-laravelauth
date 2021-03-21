<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Selamat Datang di Halaman Admin, ';

        return view('admin.dashboard', compact('title'));
    }

    public function beranda()
    {
        $title = 'Ini Halaman Beranda.';

        $data['mahasiswa'] = array(
            'nim' => '1915101039',
            'nama' => 'Agungb'
        );

        return view('admin.beranda', compact('title', 'data'));
    }
}