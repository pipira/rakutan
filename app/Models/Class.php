<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'professor_id','name'
    ];

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function favorites()
    {
        return $this->hasMany('App\Favorite');
    }

    public function professor()
    {
        return $this->belongsTo('App\Professor');
    }
}
