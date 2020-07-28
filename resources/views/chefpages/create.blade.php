@extends('layouts.app')


@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <form action="{{url('taches/'.$articl->id)}}" method="post">
          {{csrf_field()}}
          <div  class="form-group">
            <label for="">Titre De La Tache</label>
            <input type="text" class="form-control" name="title" value="">
          </div>
          <div  class="form-group">
            <label for="">Description De La Tache</label>
            <textarea name="desc" rows="8" class="form-control" cols="80"></textarea>
          </div>

          <div  class="form-group">
            <input type="submit" class="form-control btn btn-primary" value="Enregistrer">
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
