<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    use HasFactory;
    protected $guarded = [];
    function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
