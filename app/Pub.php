<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pub extends Model
{
    //une pub pour une seule pharmacie
   /* public function pharmacie(){
        return $this->belongsTo('App\Pharmacie');
    }*/

    //une pub pour une seule entreprise
    public function entreprise(){
        return $this->belongsTo('App\Entreprise');
    }
}
