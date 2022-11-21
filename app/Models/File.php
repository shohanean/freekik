<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $guarded = [];

    function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
