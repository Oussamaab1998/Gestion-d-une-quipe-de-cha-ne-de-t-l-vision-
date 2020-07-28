@extends('layouts.app')


@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form action="{{url('users/'.$userm->id)}}" method="post">
<!--on ajoute cette ligne si on a besoin de modidfication utillisation de "put"  -->
          <input type="hidden" name="_method" value="PUT">
          {{csrf_field()}}
          <div  class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" value="{{$userm->email}}">
          </div>
          <div  class="form-group">
            <label for="">Name</label>
            <textarea name="name" rows="8" class="form-control" cols="80">{{$userm->name}}</textarea>
          </div>
          <div  class="form-group">
            <label for="">prenom</label>
            <input type="text" class="form-control" name="prenom" value="{{$userm->prenom}}">
          </div>
          <div  class="form-group">
            <label for="">telephone</label>
            <input type="text" class="form-control" name="telephone" value="{{$userm->telephone}}">
          </div>
        
          <div  class="form-group">
            <label for="">cin</label>
            <input type="text" class="form-control" name="cin" value="">
          </div>
          <div  class="form-group">
            <label for="">adresse</label>
            <input type="text" class="form-control" name="adresse" value="">
          </div>
          <div  class="form-group">
            <input type="submit" class="form-control btn btn-primary" value="Enregistrer">
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
