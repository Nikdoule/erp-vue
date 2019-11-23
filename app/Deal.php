<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $fillable = [
        'reference',
        'designation',
        'denomination',
        'amount',
        'dropbox',
    ];
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
    public function developper()
    {
        return $this->belongsTo(Developper::class);
    }
    public function actions()
    {
        return $this->hasMany(Action::class);
    }
}
