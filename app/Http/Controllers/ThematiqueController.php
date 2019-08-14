<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thematique;
use App\Entreprise;
use App\Localisation;
class ThematiqueController extends Controller
{
    //
    public function listes(){
        $thematiques=Thematique::get();
        return view('thematiques',compact('thematiques'));

    }
    //affiche les entreprises presentes dans une thematiques
    public function show($data,$id){
       // $thema=Thematique::where('id',$id)->first();
       $thema=Thematique::findorFail($id);
        $nom=$thema->nom;
        $entreprise=$thema->entreprises()->get();
        //test

       //$test=$entreprise->id->localisations()->get();
        return view('entreprise-thematique',compact('entreprise','nom'));
    }
}
