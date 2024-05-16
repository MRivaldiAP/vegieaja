<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProductViewController extends Controller
{
    public function index()
    {
        $sayur = Produk::where('kategori', 'sayuran')->get();
        $buah = Produk::where('kategori', 'buah')->get();
        $kacang = Produk::where('kategori', 'kacang')->get();
        $umbi = Produk::where('kategori', 'umbi')->get();
        $olahan = Produk::where('kategori', 'olahan')->get();
        $cabai = Produk::where('kategori', 'cabai')->get();
        $bumbu = Produk::where('kategori', 'bumbu')->get();
        return view('produk.index', compact('sayur', 'buah', 'kacang', 'umbi', 'olahan', 'cabai', 'bumbu'));
    }

    public function kontak()
    {
        
        return view('kontak');
    }
}
