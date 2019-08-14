@extends('layouts.base')
@section('contenu')
dd{{$details}}
<div class="col-md-8">
        <p>{{$details->nom}} </p>
        descriptions: {{$details->situationgeo}} <br>

        Telephone:{{$details->Telephone}} <br>
        ({{$localisation->localisation}})
</div>



@endsection
