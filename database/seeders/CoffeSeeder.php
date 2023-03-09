<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoffeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coffe')->insert([
            'nama' => 'Black Coffe',
            'harga' => 3000,
            'deskripsi' => 'It is a Black Coffe from Pati.',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('coffe')->insert([
            'nama' => 'White Coffe',
            'harga' => 4000,
            'deskripsi' => 'It is a White Coffe from Malang.',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
    }
}
