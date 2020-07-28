@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Lists D'actualites</h1>

      @foreach($articls as $articl)
      <div class="">
           <img src="{{asset('storage/'.$articl->media)}}" class="img-rounded" alt="Cinque Terre" style="padding-left: 10px;" width="300" height="200">
      </div>
      <div class="card">
        <div class="card-header">{{$articl->title}} <br> {{$articl->statut}}  {{$articl->user->name}}</div>
        <div class="card-body">{{$articl->content}} , created at :  {{$articl->created_at}}</div>
      <hr>

      </div>
        <hr>
      @endforeach
    </div>
  </div>
</div>
@endsection
