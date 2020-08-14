<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'User_id',
        'comment',
    ];

    public function user(){
        return $this->belongsTo(User::tag);
    }
}