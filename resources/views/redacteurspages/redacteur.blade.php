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
        <li><a href="{{url('articlsredacteur')}}">Articls</a></li>
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
          <a href="{{url('articlsredacteur/'.$articl->id)}}" class="btn btn-primary">Accepter</a>
<a href="{{url('reclamation/'.$articl->id.'/create')}}" class="btn btn-warning">Envoyer Reclamation à propos ce articl</a>





          <!--<a href="{{url('articls/'.$articl->id)}}" class="btn btn-danger">Supprimer</a> -->
        </div>
      </div>
        <hr>
      @endforeach
    </div>
  </div>


  <div class="row">
    <div class="col-md-12">
      <h1>Lists D'articls Envoyer par chef de production</h1>

      @foreach($articlsChef as $articlsCheff)
      <div class="">
           <img src="{{asset('storage/'.$articlsCheff->media)}}" class="img-rounded" alt="Cinque Terre" style="padding-left: 10px;" width="300" height="200">
      </div>
      <div class="card">
        <div class="card-header">{{$articlsCheff->title}} <br> {{$articlsCheff->statut}}  {{$articlsCheff->user->name}}</div>
        <div class="card-body">{{$articlsCheff->content}} , created at :  {{$articlsCheff->created_at}}</div>
      <hr>
        <div class="card-footer">
          {{ csrf_field()}}
          {{method_field('DELETE')}}
          <a href="{{url('articlsredacteur/'.$articlsCheff->id)}}" class="btn btn-primary">Accepter</a>
<a href="{{url('reclamation/'.$articlsCheff->id.'/create')}}" class="btn btn-warning">Envoyer Reclamation à propos ce articl</a>





          <!--<a href="{{url('articls/'.$articl->id)}}" class="btn btn-danger">Supprimer</a> -->
        </div>
      </div>
        <hr>
      @endforeach
    </div>
  </div>




</div>
@endsection
