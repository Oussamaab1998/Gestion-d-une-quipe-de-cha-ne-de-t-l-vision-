@extends('layouts.app')


@section('content')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">

    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{url('taches')}}">Taches</a></li>
      <li>  <a class="text" href="{{ url('actualites') }}">Actualites</a></li>
      <li>  <a class="text" href="{{ url('users/'.$id) }}">Profil</a></li>
      <li>  <a class="text" href="{{ url('articls/taches') }}">Articls</a></li>
    </ul>
  </div>
</nav>
  <h1 class="titre text-center">Listes De Taches </h1>

@foreach($reclamations as $reclamation)
<div class="container">

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id de tache</th>
        <th>Titre de Reclamation </th>
        <th>Description</th>
        <th>Date</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>

      <tr>
        <td class="col-sm-2">{{$reclamation->id}}</td>
        <td class="col-sm-3">{{$reclamation->titre}}</td>
        <td class="col-sm-3">{{$reclamation->discription}}</td>
        <td class="col-sm-3">{{$reclamation->created_at}}</td>
        <td class="col-sm-3">
          <form style="display:inline-block" action="{{url('taches/'.$reclamation->id)}}" method="post">
              {{ csrf_field()}}
              {{method_field('DELETE')}}
            <button  onclick="return confirm('Tu es sure pour la supprission de cette tache?')" type="submit" class="btn btn-danger">Supprimer</button>
          </form></td>
        <td>  <a href="{{url('taches/'.$reclamation->id.'/modifier')}}" class="btn btn-default">Modifier tache</a><td>

      </tr>



    </tbody>

  </table>
</div>
@endforeach


@endsection
