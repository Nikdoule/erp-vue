<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $fillable = [
        'name',
        'started_at',
        'stopped_at'
    ];
    public function deal()
    {
        return $this->belongsTo(Deal::class);
    }
}
