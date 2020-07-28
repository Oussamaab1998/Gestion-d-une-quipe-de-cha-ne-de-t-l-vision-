<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membre;
use App\Teche;
use App\Articl;
use Auth;
use File;

use Illuminate\Http\UploadedFile;
use DB;
class MembProdController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
  public function ShowTaches(){
    if (Auth::user()->he_is <> 5){
      return view('errors.403');
    }

    $reclamations = Teche::orderBy('created_at')->get();
    $articlId =
    $id = Auth::user()->id;
    /*$artdown = DB::table('articls')
                      ->select('media')
                      ->where('id',$reclamation->articl-id)
                        ->first();*/
return view('membreprodpages.taches',['reclamations'=>$reclamations,'id'=>$id]);
  }
  function download($id){

    $d1 =  DB::table('articls')
                      ->select('media')
                      ->where('id',$id)
                        ->first();

    return response()->download(storage_path("app/public/{$d1->media}"));
  }
    public function upload($id, Request $request){
      $articl = Articl::find($id);
      if($request->hasFile('media')){
        $articl->media = $request->media->store('photo');
      }
      $articl->title =$request->input('title');
      $articl->save();

      return redirect('prod/taches');
    }
}
