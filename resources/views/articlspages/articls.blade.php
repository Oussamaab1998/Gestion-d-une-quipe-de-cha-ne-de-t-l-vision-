@extends('layouts.app')

@section('content')

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">

    </div>
    <ul class="nav navbar-nav">
      <li>  <a class="text" href="{{ url('actualites') }}">Actualites</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Lists D'articls</h1>
      <div class="pull-right">
        <a class="btn btn-primary" href="{{url('articls/create')}}">Nouveau Articl</a>
      </div>

      @foreach($articls as $articl)
      <div class="card">
        <div class="">
           <img src="{{asset('storage/'.$articl->media)}}" class="img-rounded" alt="Cinque Terre" style="padding-left: 10px;" width="300" height="200">
        </div>
        <div class="card-header">{{$articl->title}} <br>    </div>
        <div class="card-body">{{$articl->content}} , created at :  {{$articl->created_at}}</div>
      <hr>
        <div class="card-footer">
          {{ csrf_field()}}
          {{method_field('DELETE')}}
          <a href="{{url('articls/'.$articl->id)}}" class="btn btn-primary">Details</a>
          <a href="{{url('articls/'.$articl->id.'/modifier')}}" class="btn btn-default">Modifier</a>


          <form style="display:inline-block" action="{{url('articls/'.$articl->id)}}" method="post">
            {{ csrf_field()}}
            {{method_field('DELETE')}}
          <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>


          <!--<a href="{{url('articls/'.$articl->id)}}" class="btn btn-danger">Supprimer</a> -->
        </div>
      </div>
        <hr>
      @endforeach
    </div>
  </div>
</div>
@endsection
