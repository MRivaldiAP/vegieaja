<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produks')->insert([
            ['nama'=>'Brokoli', 'kategori'=>'sayuran', 'kemasan' => '2500', 'harga' => '2000', 'url_foto' => 'Brokoli-removebg-preview.png'],
            ['nama'=>'Buncis', 'kategori'=>'kacang', 'kemasan' => '2500', 'harga' => '2000', 'url_foto' => 'Buncis-removebg-preview.png'],
            ['nama'=>'Baby Caisim', 'kategori'=>'sayuran', 'kemasan' => '2500', 'harga' => '2000', 'url_foto' => 'BabyCaisim-removebg-preview.png'],
            ['nama'=>'Kacang Panjang', 'kategori'=>'kacang', 'kemasan' => '2500', 'harga' => '2000', 'url_foto' => 'KacangPanjang-removebg-preview.png'],
            ['nama'=>'Kacang Merah', 'kategori'=>'kacang', 'kemasan' => '2500', 'harga' => '2000', 'url_foto' => 'KacangMerah-removebg-preview.png'],
            ['nama'=>'Kentang Besar', 'kategori'=>'umbi', 'kemasan' => '2500', 'harga' => '2000', 'url_foto' => 'KentangBesar-removebg-preview.png'],
            ['nama'=>'Kentang Mix', 'kategori'=>'umbi', 'kemasan' => '2500', 'harga' => '2000', 'url_foto' => 'KentangMix-removebg-preview.png'],
            ['nama'=>'Kentang Kecil', 'kategori'=>'umbi', 'kemasan' => '2500', 'harga' => '2000', 'url_foto' => 'KentangKecil-removebg-preview.png'],
            ['nama'=>'Leunca', 'kategori'=>'sayuran', 'kemasan' => '2500', 'harga' => '2000', 'url_foto' => 'Leunca-removebg-preview.png'],
            ['nama'=>'Lemon', 'kategori'=>'buah', 'kemasan' => '2500', 'harga' => '2000', 'url_foto' => 'Lemon-removebg-preview.png'],
            ['nama'=>'Oyong', 'kategori'=>'sayuran', 'kemasan' => '2500', 'harga' => '2000', 'url_foto' => 'Oyong-removebg-preview.png'],
            ['nama'=>'Pakcoy', 'kategori'=>'sayuran', 'kemasan' => '2500', 'harga' => '2000', 'url_foto' => 'Pakcoy-removebg-preview.png'],
            ['nama'=>'Kol', 'kategori'=>'sayuran', 'kemasan' => 'satuan', 'harga' => '2000', 'url_foto' => 'kol-removebg-preview.png'],
            ['nama'=>'Kembang Kol', 'kategori'=>'sayuran', 'kemasan' => 'satuan', 'harga' => '1000', 'url_foto' => 'kk-removebg-preview.png'],
            ['nama'=>'Sampo', 'kategori'=>'sayuran', 'kemasan' => 'satuan', 'harga' => '5000', 'url_foto' => 'a0b63640-24ca-45a3-bfcd-8d1e7d1cb22e-removebg-preview.png'],
            ['nama'=>'Pete', 'kategori'=>'sayuran', 'kemasan' => 'satuan', 'harga' => '2500', 'url_foto' => 'pete-removebg-preview.png'],
            ['nama'=>'Paprika Hijau', 'kategori'=>'sayuran', 'kemasan' => 'satuan', 'harga' => '3500', 'url_foto' => 'ph-removebg-preview.png'],
            ['nama'=>'Paprika Merah', 'kategori'=>'sayuran', 'kemasan' => 'satuan', 'harga' => '4500', 'url_foto' => 'paprika-red-vegetables-eat-food-cook-removebg-preview.png'],
            ['nama'=>'Paprika Kuning', 'kategori'=>'sayuran', 'kemasan' => 'satuan', 'harga' => '12000', 'url_foto' => 'pk-removebg-preview.png'],
            ['nama'=>'Kol Ungu', 'kategori'=>'sayuran', 'kemasan' => 'satuan', 'harga' => '13000', 'url_foto' => 'ungu-removebg-preview.png'],
            ['nama'=>'Tahu', 'kategori'=>'olahan', 'kemasan' => 'satuan', 'harga' => '6000', 'url_foto' => 'tahu-removebg-preview.png'],
            ['nama'=>'Tempe', 'kategori'=>'olahan', 'kemasan' => 'satuan', 'harga' => '5000', 'url_foto' => 'tempe-removebg-preview.png'],
            ['nama'=>'Oncom', 'kategori'=>'olahan', 'kemasan' => 'satuan', 'harga' => '5000', 'url_foto' => 'oncom2-removebg-preview.png'],
            ['nama'=>'Cabe Hijau Keriting', 'kategori'=>'cabai', 'kemasan' => '2500', 'harga' => '2000', 'url_foto' => 'ch-removebg-preview.png'],
        ]);  
    }
}
