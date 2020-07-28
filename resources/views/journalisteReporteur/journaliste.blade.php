@extends('layouts.app')


@section('content')





<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Jounaliste</a>
    </div>
    <div class="pull-right">
      <a class="btn btn-primary" href="{{url('articls/create')}}">Nouveau Articl</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{url('articls')}}">Articls</a></li>
      <li><a href="{{url('journaliste/'.$journalisteDB->id.'/profile')}}">Profile</a></li>
      <li>  <a class="text" href="{{ url('reclamation') }}">Reclamation</a></li>
    </ul>
  </div>
</nav>




<div class="container">
  <h1>Je Suis Le Journaliste {{$journalisteDB->name}}</h1>

</div>

@endsection
