<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chef;
use App\Teche;
use App\Articl;
use Auth;
use DB;
class ChefProdController extends Controller
{
  public function ajoutertache($id){
    $articl = Articl::find($id);
return view('chefpages.create',['articl'=>$articl]);
  }
  public function ajoutertacheStore($id, Request $request){
    $tache = new Teche();

    $tache->titre = $request->input('title');
    $tache->discription = $request->input('desc');
    $tache->articl_id = Articl::find($id)->id;
    $tache->user_id = Articl::find($id)->user_id;

    $tache->save();
    return redirect('taches');
  }
  public function ShowArticls(){
$listarticls = Articl::
where('isaccepte','<>', 2)
->get();

    //$userId = Auth::id();    ->where('isaccepte','LIKE', 0)
    //$true = $listarticls->id == $userId;
    //$userId = Auth::id();
    //$true = $userId == Articl::find();
    $id = Auth::user()->id;
return view('chefpages.articls-taches',['articls'=>$listarticls,'id'=>$id]);
  }
  public function ShowTaches(){
    if (Auth::user()->he_is <> 4){
      return view('errors.403');
    }
    $reclamations = Teche::all();

    $id = Auth::user()->id;
return view('chefpages.taches',['reclamations'=>$reclamations,'id'=>$id]);
  }

  public function envoyerToRedact($id){

      if (Auth::user()->he_is <> 4){
        return view('errors.403');
      }
    $articl = Articl::find($id);
    $articl->isaccepte = 2;
    $articl->save();

    return redirect('articls/taches');
  }


  public function supprimerTache($id, Request $request){
    $tache = Teche::find($id);
    $tache->delete();

    return redirect('taches');
  }
  public function ModifierTache($id){
    $tache = Teche::find($id);
    //$this->authorize('update',$articl);
    return view('chefpages.modifiertaches',['tache'=> $tache]);
  }
  public function updateTache($id, Request $request){
    $tache = Teche::find($id);
    $tache->titre =$request->input('title');
    $tache->discription = $request->input('content');

    $tache->save();
    return redirect('taches');
  }
}
