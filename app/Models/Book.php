<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

$users = User::factory()->count(90)->create();

class Book extends Model
{

    protected $fillable = [
        'title',
        'description',
        'isbn',
        'total_copies',
        'available_copies',
        'status',
    ];
}
