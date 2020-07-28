@extends('layouts.app')


@section('content')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">

    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{url('taches')}}">Taches</a></li>
      <li>  <a class="text" href="{{ url('actualites') }}">Actualites</a></li>
      <li><a href="{{url('users/'.$id)}}">Profil</a></li>
    </ul>
  </div>
</nav>
  <h1 class="titre text-center">Listes De Taches Ajouteés Par La Chef De Production</h1>
  <div class="pull-right">

  </div>
@foreach($reclamations as $reclamation)
<div class="container">

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Titre de Reclamation </th>
        <th>Id de l'articl de tache</th>
        <th>Description</th>
        <th>Download Article File</th>
        <th>Upload Article File</th>


      </tr>
    </thead>
    <tbody>

      <tr>
        <td class="col">{{$reclamation->id}}</td>
        <td class="col">{{$reclamation->titre}}</td>
        <td class="col">{{$reclamation->articl_id}}</td>
        <td class="col">{{$reclamation->discription}}</td>
        <td class="col"> <a class="btn btn-primary" href="{{route('downloadfile',$reclamation->articl_id)}}">Download</a> </td>


        <td class="col">
          <form action="{{url('taches/'.$reclamation->articl_id)}}" method="post" enctype="multipart/form-data">
<!--on ajoute cette ligne si on a besoin de modidfication utillisation de "put"  -->
          <input type="hidden" name="_method" value="PUT">
          {{csrf_field()}}
                <div class="form-group">
                    <label for="media">Media</label>
                    <input type="file" name="media" class="form-control"></input>
                  </div>
                  <div  class="form-group">
                    <label for="">Titre</label>
                    <input type="text" class="form-control" name="title" value="  ">
                  </div>
                  <div  class="form-group">
                    <input type="submit" class="form-control btn btn-primary" value="Enregistrer">
                  </div>
                </form>
              </td>



      </tr>



    </tbody>

  </table>
</div>
@endforeach


@endsection
