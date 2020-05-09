<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'body'
    ];
}
