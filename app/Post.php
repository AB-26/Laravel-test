<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'User_id',
        'name',
        'slug',
        'body'
    ];

    public function user(){
        return $this->belongsTo(User::tag);
    }
}
