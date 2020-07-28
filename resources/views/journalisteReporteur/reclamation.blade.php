@extends('layouts.app')


@section('content')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Jounaliste</a>
    </div>
    <ul class="nav navbar-nav">
      <li>  <a class="text" href="{{ url('reclamation') }}">Reclamation</a></li>
    </ul>
  </div>
</nav>
  <h1 class="titre text-center">Listes De Reclamations </h1>
@foreach($reclamations as $reclamation)
<div class="container">

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Titre de Reclamation </th>
        <th>Description</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <td class="col-md-2 well">{{$reclamation->id}}</td>
        <td class="col-md-2 well">{{$reclamation->titre_req}}</td>
        <td class="col-md-2 well">{{$reclamation->description}}</td>
        <td class="col-md-3 well">{{$reclamation->created_at}}</td>

        <td class="col-md-3 well"> <a href="{{url('journaliste/'.$reclamation->id.'/modifier')}}" class="btn btn-primary">Modifier Articl</a> </td>
      </tr>



    </tbody>
  </table>
</div>
@endforeach


@endsection
