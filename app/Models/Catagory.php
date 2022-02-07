<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;
    protected $table = 'catagories';
    protected $fillable =[
        'name',
        'slug',
        'describtion',
        'status',
        'popular',
        'image',
        'meta_title',
        'meta_descib',
        'meta_keyword',
        
    ];
}
