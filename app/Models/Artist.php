<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'genre', 'language', 'img', 'category_id'];

    // 1 artista puo' appartenere ad una categoria
    public function category(){

        return $this->belongsTo(Category::class);
    }

}
