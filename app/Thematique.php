<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thematique extends Model
{
    //
    protected $fillable = [
        'nom',
    ];
    //une thematique pour plusieurs entreprise
    public function entreprises(){
        return $this->belongsToMany('App\Entreprise');
    }
}
