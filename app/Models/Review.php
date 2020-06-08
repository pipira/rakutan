<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'user_id','class_id','sentence','star'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function class()
    {
        return $this->belongsTo('App\Class');
    }
}
