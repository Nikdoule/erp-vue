<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Param_todo extends Model
{
    protected $fillable = [
        'title',
        'description'
    ];
}
