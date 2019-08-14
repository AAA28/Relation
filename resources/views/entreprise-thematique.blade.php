@extends('layouts.base')
@section('contenu')
dd{{$entreprise}} <br>


<i class="fa fa-align-center" aria-hidden="true"></i>
<center><h6>Listes des Entreprises dans le domaine {{$nom}}</h6> </center>
@foreach ($entreprise as $item)



<div class="row colonne">
    <div class="col-md-4">
        <h3>{{$item->RaisonSocial}}</h3>
        <p>PLACE LOGO</p>


    </div>

    <div class="col-md-4">
            <h6>{{$item->RaisonSocial}}</h6>
            {{$nom}}
            <div class="localisation">
                {{$item->localisation}}
            </div>

            Tel:{{$item->Tel1}}

    </div>

    <div class="col-md-4">
        <div class="font">
            les images facebook
        </div>
            Tel:{{$item->Tel2}}
           <p>  Mail:</p>
            <a href="">+ de détails</a>
    </div>
    {{$item->description}} ffffffffffffff
</div>
@endforeach
@endsection
