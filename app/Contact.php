<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        
        'first_name',
        'last_name',
        'title',
        'email',
        'company',
        'mark',
        'siret',
        'kbis',
        'adress',
        'zip_code',
        'city',
        'country',
        'language',
        'naf',
        'phone'
    ];
    public function user()
    {
        return $this->belongsTo('App\user');
    }
            
}
