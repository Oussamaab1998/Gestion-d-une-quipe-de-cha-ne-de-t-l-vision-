@extends('layouts.app')

@section('content')

<div class="container">
  <h1 class="titre text-center">Article </h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Titre de l'article </th>
        <th>Contenu</th>
        <th>Media</th>
        <th>Categorie</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <td>{{$articles->title}}</td>
        <td>{{$articles->content}}</td>
        <td>{{$articles->media}}</td>
        <td>{{$articles->Categorie}}</td>
        <td></td>
      </tr>



    </tbody>
  </table>
</div>

@endsection
