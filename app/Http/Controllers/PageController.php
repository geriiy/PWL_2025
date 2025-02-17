<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        $nama = 'Gheriya';
        $nim = '2341720109';

        return "<p>Nama: $nama</p><p>NIM: $nim</p>";
    }

    public function articles($articleId)
    {
        return 'Halaman Artikel dengan ID ' . $articleId;
    }
}
