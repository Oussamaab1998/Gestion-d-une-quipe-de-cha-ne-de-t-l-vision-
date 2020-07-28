@extends('layouts.app')


@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form action="{{url('articls')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <div  class="form-group">
            <label for="">Titre</label>
            <input type="text" class="form-control" name="title" value="">
          </div>
          <div  class="form-group">
            <label for="">Content</label>
            <textarea name="content" rows="8" class="form-control" cols="80"></textarea>
          </div>
          <div class="form-group">
            <label for="media">Media</label>
            <input type="file" name="media" class="form-control"></input>
          </div>
          <div  class="form-group">
            <label for="sel1">Categorie</label>
                 <select class="form-control" id="sel1" name="statut">
                   <option>Sport</option>
                   <option>Politique</option>
                   <option>Social</option>
                   <option>Musical</option>
                 </select>
          </div>
          <div  class="form-group">
            <input type="submit" class="form-control btn btn-primary" value="Enregistrer">
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
