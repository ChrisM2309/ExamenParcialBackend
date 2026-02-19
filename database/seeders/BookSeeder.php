<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'title' => 'Don Quijote de la Mancha',
            'description' => 'Aventuras de un caballero loco',
            'isbn' => '9788424115531',
            'total_copies'=> 5, 
            'available_copies'=> 5,
            'status'=> 1
        ]);
        DB::table('books')->insert([
            'title' => 'Cien aÃ±os de soledad',
            'description' => 'Historia de la familia BuendÃ­a',
            'isbn' => '9788424115531',
            'total_copies'=> 5, 
            'available_copies'=> 5,
            'status'=> 1
        ]);
    }
}
