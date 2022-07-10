<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'excerpt', 'body']; digunakan dimana yang boleh diisi yaitu title,excerpt,body
    protected $guarded =['id']; //digunakan dimana id tidak boleh diisi yg lain boleh
}
