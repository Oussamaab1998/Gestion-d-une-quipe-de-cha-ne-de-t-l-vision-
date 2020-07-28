@extends('layouts.app')
@section('content')
<style media="screen">
  .btn{
    margin:0 10px;
  }
</style>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">

    </div>
    <ul class="  nav navbar-nav">
      <li style="margin:0px 30px;"><a href="{{url('actualites')}}">Actualites</a></li>
      <li style="margin:0px 30px;"><a href="{{url('users/'.$users[1]->id)}}">Profil</a></li>

    </ul>
  </div>
</nav>
<div class="container">
  <h1 class="titre text-center">Liste D'utlisateurs</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Images</th>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Created At</th>
      </tr>
    </thead>
    <tbody>

        @foreach($users as $user)
      <tr>
        <td> <img src="{{asset('storage/'.$user->photo)}}" class="img-rounded" alt="Cinque Terre" width="50" height="50"> </td>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
        <td>
            <form style="display:inline-block" action="{{url('users/'.$user->id)}}" method="post">
              {{ csrf_field()}}
              {{method_field('DELETE')}}
            <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Supprimer</button>
          </form>
            <a href="{{url('users/'.$user->id)}}" class="btn btn-primary">Details</a>
</td>
      </tr>

@endforeach

    </tbody>
  </table>
</div>

<div class="container">
  <h1 class="titre text-center">Liste D'utlisateurs En Attente De Reponse</h1>
<!--  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Created At</th>
      </tr>
    </thead>
    <tbody>
        @foreach($usersff as $userf)
      <tr>
        <td>{{$userf->id}}</td>
        <td>{{$userf->name}}</td>
        <td>{{$userf->email}}</td>
        <td>{{$userf->created_at}}</td>
        <td><a href="{{url('users/'.$userf->id.'/ajouter')}}"  class="btn btn-primary">Ajouter</a><a href="" class="btn btn-danger">Refuser</a></td>
      </tr>

@endforeach

    </tbody>
  </table>-->

<div class="text-center">
  <a  href="{{url('users/ajouter')}}"  class="btn btn-primary ">Ajouter Un Nouveau Utilisateur</a>
</div>
@endsection
