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
        'phone',
        'status',
        'money',
        'time_zone'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function developper()
    {
        return $this->belongsTo(Developper::class);
    }
    public function deals()
    {
        return $this->hasMany(Deal::class);
    }
            
}
