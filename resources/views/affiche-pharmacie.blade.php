@extends('layouts.base')
@section('contenu')

<h3 style="text-align:center;">{{$localisation->localisation}}</h3>

    <p></p>
    <p></p>


<table class="table table-striped">
    <p>Votre recherche :{{$all->count()}} Pharmacie(2) trouvée(s)</p>
        <thead>
          <tr>

            <th scope="col">Pharmacie</th>
            <th scope="col">Situation Géographique</th>
          </tr>
        </thead>
        @foreach ($all as $item)
        <tbody>
          <tr>
            <td>
              <a href="{{route('showone',[$item->id,$localisation->localisation ] )}}"> {{$item->nom}} </a>
            </td>
            <td>{{$item->situationgeo}}</td>

          </tr>
        </tbody>
        @endforeach
      </table>







@endsection







