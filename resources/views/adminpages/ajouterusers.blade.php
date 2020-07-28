@extends('layouts.app')


@section('content')

@if(count($errors)>0)

<div class="alert alert-danger">
  <ul>


    @foreach($errors->all() as $msg)
     <li>{{$msg}}</li>
  @endforeach
</ul>
</div>
@endif

<div class="container">


<form action="{{url('users')}}" method="post" enctype="multipart/form-data">

  {{csrf_field()}}
  <div class="form-group">
    <label for="salt">Login / Email</label>
    <input type="text" name="email" class="form-control"  value="{{ old('email')}}"></input>
  </div>
  <div class="form-group">
    <label for="salt">Password</label>
    <input type="text" name="password" class="form-control"  value=""></input>
  </div>
  <div class="form-group">
    <label for="username">Nom</label>
    <input type="text" class="form-control" name="name" value="">
  </div>
  <div class="form-group">
    <label for="username">Prenom</label>
    <input type="text" class="form-control" name="prenom" value="">
  </div>

  <div class="form-group">
    <label for="cin">Cin</label>
    <input type="text" name="cin" class="form-control"  value=""></input>
  </div>
  <div class="form-group">
    <label for="telephone">Telephone</label>
    <input type="text" name="telephone" class="form-control"  value=""></input>
  </div>
  <div class="form-group">
    <label for="adresse">Adresse</label>
    <input type="text" name="adresse" class="form-control"  value=""></input>
  </div>

  <div class="form-group">
    <label for="photo">Image</label>
    <input type="file" name="photo" class="form-control"></input>
  </div>
  <!--
Thh post values

Journaliste reporteur : 2
chef de production :3
Membre Equipe de production :4

<div class="radio">
  <label><input type="radio" value="5" name="he_is">Membre Equipe Production</label>
</div>
  -->
  <div class="radio">
    <label><input type="radio" value="2" name="he_is">Journaliste Reporteur</label>
  </div>
  <div class="radio">
    <label><input type="radio" value="3" name="he_is">Redacteur En Chef</label>
  </div>
  <div class="radio">
    <label><input type="radio" value="4" name="he_is">Chef Production</label>
  </div>
  <div class="radio">
    <label><input type="radio" value="5" name="he_is">Membre Equipe Production</label>
  </div>

  <!--
Thh post values

  <div class="form-group">
    <label for="salt">Poste</label>
    <input type="text" name="he_is" class="form-control"  value=""></input>
  </div>
    -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
