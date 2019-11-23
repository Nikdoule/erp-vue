<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developper extends Model
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
        'money',
        'zip_code',
        'time_zone',
        'city',
        'country',
        'language',
        'naf',
        'status',
        'phone'
    ];
    public function deals() {
        return $this->hasMany(Deal::class);
    }
    public function contacts() {
        return $this->hasMany(Contact::class);
    }
}
