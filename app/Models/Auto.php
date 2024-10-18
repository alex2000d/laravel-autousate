<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Auto extends Model
{
    use HasFactory;

    protected $fillable = ['brand', 'model', 'year', 'fuel_type', 'horsepower', 'doors', 'change_type', 'color', 'mileage', 'price', 'image', 'quantity', 'status',];

    public function optionals(){
        return $this->belongsToMany(Optional::class);
    }
}
