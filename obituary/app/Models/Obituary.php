<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obituary extends Model
{
    use HasFactory;

    // Define the table name (optional if the table name matches the plural form)
    protected $table = 'obituaries';

    // Specify the fillable fields to allow mass assignment
    protected $fillable = [
        'name',
        'date_of_birth',
        'date_of_death',
        'content',
        'author',
        'slug'
    ];
}
