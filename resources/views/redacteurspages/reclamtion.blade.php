@extends('layouts.app')


@section('content')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">

    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{url('articlsredacteur')}}">Articls</a></li>
      <li>  <a class="text" href="{{ url('articlsredacteur') }}">Reclamation</a></li>
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
        <td class="col-sm-2">{{$reclamation->id}}</td>
        <td class="col-sm-3">{{$reclamation->titre_req}}</td>
        <td class="col-sm-3">{{$reclamation->description}}</td>
        <td class="col-sm-3">{{$reclamation->created_at}}</td>
        <td class="col-sm-3">
          <form style="display:inline-block" action="{{url('reclamation/'.$reclamation->id)}}" method="post">
              {{ csrf_field()}}
              {{method_field('DELETE')}}
            <button type="submit" class="btn btn-danger">Supprimer</button>
          </form></td>
      </tr>



    </tbody>

  </table>
</div>
@endforeach


@endsection
