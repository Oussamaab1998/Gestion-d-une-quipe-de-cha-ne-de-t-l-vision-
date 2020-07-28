<?php

namespace App\Http\Controllers;
use App\Articl;
use App\User;
use App\Reclamation;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JounalisteController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }
  public function Jounaliste($id){
    if (Auth::user()->he_is <> 2){
      return view('errors.403');
    }
    $journaliste = User::find($id);
    return view('journalisteReporteur.journaliste',['journalisteDB'=>$journaliste]);
  }

/*  public function ($id){
    $user = User::find($id);
    return view('journalisteReporteur.journalisteprofile',['user'=> $user]);

    return View::make('header_admin_template', $data)->nest('home_view', $data)->nest('footer_admin_template', $data);
  }*/
  public function gestionProfil($id){

    $user = User::find($id);
    return view('journalisteReporteur.pp',['user'=> $user]);
  }
  public function ModifierUser($id){

    $userm = User::find($id);

    return view('journalisteReporteur.modiferuser',['userm'=> $userm]);
  }


  public function updateUser($id, Request $request){

    $userm = User::find($id);
    $userm->email =$request->input('email');
    $userm->name = $request->input('name');
    $userm->prenom = $request->input('prenom');
    $userm->telephone = $request->input('telephone');
    $userm->roles = $request->input('roles');
    $userm->cin = $request->input('cin');
    $userm->adresse = $request->input('adresse');
    if($request->hasFile('photo')){
      $user->photo = $request->photo->store('photo');
    }
    $userm->save();
    return redirect('journaliste/'.$userm->id);
  }

  public function consulterActu(){

    $listarticls = Articl::all()->where('isaccepte', 1);
return view('articlspages.actualites',['articls'=>$listarticls]);
  }
  public function gestionArticle(){

  }

    public function showReclamations(){
      if (Auth::user()->he_is <> 2){
        return view('errors.403');
      }
      $user_id =Auth::user()->id;
      $reclam_row = DB::table('articls')
                ->select('hasreclam')
                ->where('user_id','=',$user_id )
                ->get();


$reclamations = DB::table('reclamations')
->where(function($query) use($reclam_row){
    foreach($reclam_row as $keyword) {
        $query->orWhere('id', 'LIKE', '%'.$keyword->hasreclam.'%');
    }
})->orderBy('created_at')->get();

    /*  $reclamations = DB::table('reclamations')
                        ->where('idreclamation',$reclam_row->hasreclam)
                          ->get();*/
  return view('journalisteReporteur.reclamation',['reclamations'=>$reclamations]);
    }

    public function modifiArticlByReclam($id){
      $articlm = Reclamation::find($id);

      $idd  = DB::table('reclamations')
      ->select('id')
      ->where('id','=',$id)
      ->first();
      $idd= json_decode( json_encode($idd), true);
      $articlm  = DB::table('articls')
      ->where('hasreclam','=',$idd)
      ->first();
      return view('journalisteReporteur.modifierartbyrec',['articl'=> $articlm]);

    }
    public function updateArticle($id, Request $request){
      $articl = Articl::find($id);
      $articl->title =$request->input('title');
      $articl->content = $request->input('content');
      $articl->media = $request->input('media');
      $articl->Categorie = $request->input('statut');
      $articl->save();
      return redirect('articls');
    }





    public function showReclamationsRedacteur(){

        if (Auth::user()->he_is <> 3){
          return view('errors.403');
        }
      $reclamations = Reclamation::all();
  return view('redacteurspages.reclamtion',['reclamations'=>$reclamations]);
    }
  }
