<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articl;
use App\Reclamation;
use Auth;
class RedacteurController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
  public function ShowArticls(){
    if (Auth::user()->he_is <> 3){
      return view('errors.403');
    }
    $listarticls = Articl::all()->where('isaccepte','LIKE', 0);
    $listarticlschefprod = Articl::all()->where('isaccepte','LIKE',2);
    //$userId = Auth::id();
    //$true = $listarticls->id == $userId;
    //$userId = Auth::id();
    //$true = $userId == Articl::find();
    $id = Auth::user()->id;
return view('redacteurspages.redacteur',['articls'=>$listarticls,'id'=>$id,'articlsChef'=>$listarticlschefprod]);
  }
  public function accepte($id){

      if (Auth::user()->he_is <> 3){
        return view('errors.403');
      }
    $articl = Articl::find($id);
    $articl->isaccepte = 1;
    $articl->save();

    return redirect('articlsredacteur');
  }
  public function ajouteReclamArticle($id){

  }
  public function ajouterReclamation($id){

      if (Auth::user()->he_is <> 3){
        return view('errors.403');
      }
    $articl = Articl::find($id);
return view('redacteurspages.create',['articl'=>$articl]);
  }


  public function ajouterReclamationStore($id, Request $request){

      if (Auth::user()->he_is <> 3){
        return view('errors.403');
      }
    $reclamation = new Reclamation();

    $reclamation->titre_req = $request->input('title');
    $reclamation->description = $request->input('content');
    $articl = Articl::find($id);
    $articl ->hasreclam = $reclamation->id;


    $reclamation->save();
    $articl ->hasreclam = $reclamation->id;
    $articl->save();
    return redirect('articlsredacteur');
  }
  public function supprimerReclamation($id, Request $request){

      if (Auth::user()->he_is <> 3){
        return view('errors.403');
      }
    $reclamation = Reclamation::find($id);
    $reclamation->delete();
    return redirect('articlsredacteur');
  }
}
