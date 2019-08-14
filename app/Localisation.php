<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localisation extends Model
{
    protected $fillable = [
        'nom',
    ];
    //une localisation hasMany pharmacie
    public function pharmacies(){
        return $this->hasMany('App\Pharmacie');
    }

    public function entreprises(){
        return $this->belongsToMany('App\Entreprise');
    }
}
