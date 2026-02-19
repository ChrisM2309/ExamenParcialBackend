<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

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
