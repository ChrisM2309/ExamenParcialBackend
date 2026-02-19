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
            'isbn' => '9780307350435',
            'total_copies'=> 3, 
            'available_copies'=> 3,
            'status'=> 1
        ]);
        DB::table('books')->insert([
            'title' => 'Orgullo y Prejuicio',
            'description' => 'Novela de costumbres y amor',
            'isbn' => '9788467040418',
            'total_copies'=> 4, 
            'available_copies'=> 4,
            'status'=> 1
        ]);
         DB::table('books')->insert([
            'title' => 'Crimen y Castigo',
            'description' => 'Dilemas morales y justicia',
            'isbn' => '9788420651330',
            'total_copies'=> 2, 
            'available_copies'=> 2,
            'status'=> 1
        ]);
                 DB::table('books')->insert([
            'title' => 'El Principito',
            'description' => 'Relato corto sobre la vida',
            'isbn' => '9780156013987',
            'total_copies'=> 10, 
            'available_copies'=> 10,
            'status'=> 1
        ]);
        DB::table('books')->insert([
            'title' => '1984',
            'description' => 'DistopÃ­a polÃ­tica y vigilancia',
            'isbn' => '9788466332514',
            'total_copies'=> 6, 
            'available_copies'=> 6,
            'status'=> 1
        ]);
           DB::table('books')->insert([
            'title' => 'La Odisea',
            'description' => 'Viaje Ã©pico de Ulises',
            'isbn' => '9788424924515',
            'total_copies'=> 3, 
            'available_copies'=> 3,
            'status'=> 1
        ]);
        DB::table('books')->insert([
            'title' => 'El Gran Gatsby',
            'description' => 'El sueÃ±o americano en los aÃ±os 20',
            'isbn' => '9788467036411',
            'total_copies'=> 4, 
            'available_copies'=> 4,
            'status'=> 1
        ]);
        DB::table('books')->insert([
            'title' => 'Rayuela',
            'description' => 'Novela experimental de CortÃ¡zar',
            'isbn' => '9788420431321',
            'total_copies'=> 2, 
            'available_copies'=> 2,
            'status'=> 1
        ]);
         DB::table('books')->insert([
            'title' => 'Hamlet',
            'description' => 'Tragedia de venganza y duda',
            'isbn' => '9788437600123',
            'total_copies'=> 5, 
            'available_copies'=> 5,
            'status'=> 1
        ]); 
    }
}
