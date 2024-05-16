<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'name'=>'agen', 
                'email'=>'agen@test.com', 
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', //password
                'alamat'=>'Jl. Mangga',
                'kota'=>'Surabaya',
                'role'=>'agen',
                'hp'=>'085085085',
                'kelurahan'=>'Mejasem Barat',
                'rw'=>'3',
                'kode'=>'A-mejasem-barat-3'
            ]);
    }
}
