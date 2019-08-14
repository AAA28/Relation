@extends('layouts.base')
@section('contenu')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="{{route('show',2)}}">Cocody</a>
            </div>
            <div class="col-md-2">
                    <a href="{{route('show',1)}}">Abobo</a>
                </div>
        </div>
    </div>
@endsection
