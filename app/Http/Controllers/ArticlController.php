<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articl;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Auth;
class ArticlController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }
  public function ajouterArticle(){
    return view('articlspages.create');
  }
  public function ajouterArticleStore(Request $request){
    $articl = new Articl();

    $articl->title = $request->input('title');
    $articl->content = $request->input('content');
    $articl->media = $request->input('media');
    if($request->hasFile('media')){
      $articl->media = $request->media->store('photo');
    }
    $articl->Categorie = $request->input('statut');
    $articl->user_id = Auth::user()->id;
    $articl->save();
    return redirect('articls');
  }
  public function ConsulterArticle($id){
    $articl = Articl::find($id);
    return view('articlspages.article',['articles'=> $articl]);
  }
  public function ModifierArticle($id){
    $articl = Articl::find($id);
    $this->authorize('update',$articl);
    return view('articlspages.modifier',['articl'=> $articl]);
  }
  public function updateArticle($id, Request $request){
    $articl = Articl::find($id);
    $articl->title =$request->input('title');
    $articl->content = $request->input('content');
    if($request->hasFile('media')){
      $articl->media = $request->media->store('photo');
    }

    $articl->Categorie = $request->input('statut');
    $articl->save();
    return redirect('articls');
  }
  public function supprimerArticle($id, Request $request){

    $articl = Articl::find($id);
    $this->authorize('delete',$articl);
    $articl->delete();
    $userId = Auth::id();
    $auth_id = Auth::id();
    $idd = $articl->user_id;
    $user = User::find($idd);
    if($user->he_is == 3){
      return redirect('articlsredacteur');
    }else{
    return redirect('articls');
  }}

  public function supprimerUser($id, Request $request){

    $user = User::find($id);
    $user->delete();
    return redirect('users');
  }





  public function ShowArticls(){
    $id =Auth::id();
    $reclamations = DB::table('articls')
                      ->where('user_id',$id)
                        ->get();

    //$userId = Auth::id();
    //$true = $listarticls->id == $userId;
    //$userId = Auth::id();
    //$true = $userId == Articl::find();

return view('articlspages.articls',['articls'=>$reclamations]);
  }

}
