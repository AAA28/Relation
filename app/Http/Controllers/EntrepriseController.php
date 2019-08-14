<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entreprise;
use App\Thematique;
use App\Localisation;
class EntrepriseController extends Controller
{
    //
    public function showform(){
        $thematiques=Thematique::all();
        $localisation=Localisation::all();//ajout

        return view('form-entreprise',compact('thematiques','localisation'));
    }

    public function storeform(Request $request){
        //etape de validation
        /*
        $data=$request->validate([
            'RaisonSocial'=>'required',
            'Sigle'=>'required',
        ]);
        */
        $entreprise=new Entreprise;
        $entreprise->RaisonSocial=$request->RaisonSocial;
        $entreprise->Sigle=$request->Sigle;
        $entreprise->Tel1=$request->Tel1;
        $entreprise->Tel2=$request->Tel2;
        $entreprise->Cel1=$request->Cel1;
        $entreprise->Cel2=$request->Cel2;
        $entreprise->description=$request->description;
        $entreprise->save();
        $entre=Entreprise::find($entreprise->id);
        //on attache entreprise a thematique
        $thema=$entre->thematiques()->attach($request->thematique);
        //on attache entreprise à localisation
        $local=$entre->localisations()->attach($request->localisation);
        return view('acceuil');
    }




}
