@extends('layouts.base')
@section('contenu')
    <div class="col-md-6 offset-md-3">
        <form action="{{route('storeform')}}" method="post">
            @csrf
                <div class="form-group">
                    <label for="RaisonSocial">Raison Social</label>
                    <input type="text" name="RaisonSocial" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Help text</small>
                </div>
                <div class="form-group">
                        <label for="Sigle">Sigle</label>
                        <input type="text" name="Sigle" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                </div>

                <div class="form-group">
                        <label for="Tel1">Tel-1</label>
                        <input type="text" name="Tel1" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                </div>
                <div class="form-group">
                        <label for="Tel2">Tel-2</label>
                        <input type="text" name="Tel2" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                </div>
                <div class="form-group">
                        <label for="Cel1">Cel-1</label>
                        <input type="text" name="Cel1" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                </div>
                <div class="form-group">
                        <label for="Cel2">Cel-2</label>
                        <input type="text" name="Cel2" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                </div>
                <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                </div>

                <div class="form-group">
                  <label for="thematique">Thematique</label>
                  <select  class="custom-select" id="filtering" multiple="multiple" name="thematique">
                    @foreach ($thematiques as $item)
                    <option value="{{$item->id}}">{{$item->nom}}</option>
                    @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="localisation">Localisation</label>
                        <select  class="custom-select" id="filtering" multiple="multiple" name="localisation">
                          @foreach ($localisation as $item)
                          <option value="{{$item->id}}">{{$item->localisation}}</option>
                          @endforeach

                        </select>
                </div>


                <div class="form-group">
                        <button type="submit" class="btn btn-primary">Valider</button>

                </div>

        </form>

    </div>
@endsection
