@extends('layouts.app')

@section('content')

<div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      </div>
      <div class="pull-right">

      </div>
      <ul class="nav navbar-nav">
        <li><a href="{{url('taches')}}">Taches</a></li>
        <li><a href="{{url('users/'.$id)}}">Profil</a></li>
        <li>  <a class="text" href="{{ url('reclamation/redacteur') }}">Reclamation</a></li>
        <li><a href="{{url('actualites')}}">Actualites</a></li>
      </ul>
    </div>
  </nav>
  <div class="row">
    <div class="col-md-12">
      <h1>Lists D'articls En Attente</h1>

      @foreach($articls as $articl)
      <div class="">
           <img src="{{asset('storage/'.$articl->media)}}" class="img-rounded" alt="Cinque Terre" style="padding-left: 10px;" width="300" height="200">
      </div>
      <div class="card">
        <div class="card-header">{{$articl->title}} <br> {{$articl->statut}}  {{$articl->user->name}}</div>
        <div class="card-body">{{$articl->content}} , created at :  {{$articl->created_at}}</div>
      <hr>
        <div class="card-footer">
          {{ csrf_field()}}
          {{method_field('DELETE')}}

<a href="{{url('taches/'.$articl->id.'/create')}}" class="btn btn-warning">Envoyer Tache à propos ce articl</a>
<a href="{{url('articls/taches/'.$articl->id)}}" class="btn btn-primary">Envoyer To Redacteur</a>




          <!--<a href="{{url('articls/'.$articl->id)}}" class="btn btn-danger">Supprimer</a> -->
        </div>
      </div>
        <hr>
      @endforeach
    </div>
  </div>
</div>
@endsection
