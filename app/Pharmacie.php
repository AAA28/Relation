<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacie extends Model
{

    protected $fillable = [
        'nom', 'situationgeo', 'Telephone','debut','fin','logo','pub',
    ];
    //une pharmacie est dans une seule ville
    public function localisation(){
        return $this->belongsTo('App\Localisation');
    }
    //une pharmacie a une seule pub
    /*public function pub(){
        return $this->hasOne('App\Pub');
    }*/
}
