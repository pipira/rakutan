<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'user_id','class_id'
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
