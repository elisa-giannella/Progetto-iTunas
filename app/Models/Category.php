<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function artists(){
        // a 1 categoria corrispondono piu' artisti
        return $this->hasMany(Artist::class);
    }

}
