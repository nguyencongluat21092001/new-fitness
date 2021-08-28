<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'tbl_blog';
    protected $fillable = [ 
        'post_title','post_image','post_content','created_at'
    ];
}
