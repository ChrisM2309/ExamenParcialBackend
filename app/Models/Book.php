<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Attributes\UseFactory;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'isbn',
        'total_copies',
        'available_copies',
        'status',
    ];
}
