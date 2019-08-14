<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $fillable = [
        'RaisonSocial', 'Sigle', 'Tel1','Tel2','Cel1','Cel2','description',
    ];
    //une entreprise possede plusieurs pubs
    public function pubs(){
        return $this->hasMany('App\Pub');
    }

    //une entreprise peut avoir plusieurs thematique
    public function thematiques(){
        return $this->belongsToMany('App\Thematique');
    }
    //une entreprise peut etre dans plusieurs localite
    public function localisations(){
        return $this->belongsToMany('App\Localisation');
    }

    //test sur les evenements
    /*
    protected static function boot(){
        parent::boot();
        static::creating(function($data){

        });

    }*/
}
