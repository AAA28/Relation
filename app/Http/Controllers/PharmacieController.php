<?php

namespace App\Http\Controllers;
use App\Pharmacie;
use App\Localisation;
use Illuminate\Http\Request;

class PharmacieController extends Controller
{

    public function index(){
        return view('acceuil');
    }

    //affichage des pharmacies
    public function showliste(){
        return view('pharmacie-garde');
    }

    //
    public function show($id){
        $all=Pharmacie::where('localisation_id',$id)->get();
        $localisation=Localisation::find($id);
        //$local=$all->localisation()->first();
        return view('affiche-pharmacie',compact('all','localisation'));
    }

    public function showone($id){
        $details=Pharmacie::find($id);
        $localisation=Localisation::find($id);
        return view('detail',compact('details','localisation'));

    }

    public function showform(){
        $local=Localisation::get();
        return view('showform',compact('local'));
    }
    public function storeform(Request $request){
        $phar=new Pharmacie();
        //partie du validate
        $phar->nom=$request->nom;
        $phar->situationgeo=$request->situationgeo;
        $phar->Telephone=$request->Telephone;
        $phar->debut=$request->debut;
        $phar->fin=$request->fin;
        $phar->localisation_id=$request->localisation;//revoir ici
        //gestion des images
        if($request->hasFile('logo')){
            $file=$request->file('logo');//nom de l'image
            $extension=$file->getClientOriginalExtension();//je recupere l'extension
            //  $filename=time() . '.' . $extension;
            $filename=$request->nom . '.' . $extension;
             $file->move('Image/pharmacie/logo',$filename);//on deplace le filename dans Image/pharmaciee/logo
            $phar->logo=$filename;
         }else{
             return $request;
             $phar->logo='';
         }

         if($request->hasFile('pub')){
            $file=$request->file('pub');//nom de l'image
            $extension=$file->getClientOriginalExtension();//je recupere l'extension
            //  $filename=time() . '.' . $extension;
            $filename=$request->nom. '.' . $extension;
             $file->move('Image/pharmacie/pub',$filename);//on deplace le filename dans Image/pharmaciee/logo
            $phar->pub=$filename;
         }else{
             return $request;
             $phar->pub='';
         }



         $phar->save();
         return view('acceuil');

    }





}
