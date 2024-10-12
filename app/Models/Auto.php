<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Auto extends Model
{
    use HasFactory;

    protected $fillable = ['optionals', 'name', 'engine', 'price', 'image', 'quantity', 'status'];
}
