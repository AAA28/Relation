@extends('layouts.base')
@section('contenu')
    <h5>Listes de Thematiques</h5>
    <div class="col-md-6">
            @foreach ($thematiques as $item)
            <div class="col-md-2">
                    <p> <a href="{{route('show',[$item->nom,$item->id])}}">{{$item->nom}} </a>

                    </p>
            </div>

            @endforeach
    </div>
@endsection
