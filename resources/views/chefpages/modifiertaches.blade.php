@extends('layouts.app')


@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form action="{{url('taches/'.$tache->id)}}" method="post">
          <input type="hidden" name="_method" value="PUT">
          {{csrf_field()}}
          <div  class="form-group">
            <label for="">Titre De Tache</label>
            <input type="text" class="form-control" name="title" value="{{$tache->titre}}">
          </div>
          <div  class="form-group">
            <label for="">Description De Tache</label>
            <textarea name="content" rows="8" class="form-control" cols="80">{{$tache->discription}}</textarea>
          </div>


          <div  class="form-group">
            <input type="submit" class="form-control btn btn-primary" value="Enregistrer">
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
