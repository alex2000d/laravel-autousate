<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Optional extends Model
{
    use HasFactory;

    protected $fillable = ['optionals', 'slug'];

    public static function generateSlug($optionals){
        return Str::slug($optionals, '-');
    }

    public function autos(){
        return $this->belongsToMany(Auto::class);
    }
}
