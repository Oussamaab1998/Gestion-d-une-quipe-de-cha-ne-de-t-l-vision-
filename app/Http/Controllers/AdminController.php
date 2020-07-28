<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\Journaliste;
use App\Redacteur;
use App\Chef;
use App\Membre;
use App\Articl;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\userRequest;
use Illuminate\Support\Facades\Hash;



class AdminController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
    public function showUsers(){
      $listusers = User::all();
      $listusersff = User::where('he_is',6)->get();

      return view('adminpages/users',['users'=>$listusers,'usersff'=>$listusersff]);
    }
    public function getUserAjouter(){
      //$usered = User::find($id);
      return view('adminpages.ajouterusers');
    }
    public function ajouterUser(userRequest $request){
      $user = new User();
      $user->name =$request->input('name');
      $user->email =$request->input('email');
      $user->password = bcrypt($request->input('password'));
      //$user->password =$request->input('password');
      $user->prenom = $request->input('prenom');

      $user->cin = $request->input('cin');
      $user->adresse =$request->input('adresse');
      $user->telephone =$request->input('telephone');

      //$user->enabled = $request->input('enabled');
      //$user->salt = $request->input('salt');
      //$user->username_canonical =$request->input('username_canonical');
      //$user->email_canonical = $request->input('email_canonical');
      $user->he_is = $request->input('he_is');
      if($user->he_is==2){
        $journaliste = new Journaliste();

        $journaliste->save();
      }
      if($user->he_is==3){
        $redacteur = new Redacteur();

        $redacteur->save();
      }
      if($user->he_is==4){
        $chef = new Chef();

        $chef->save();
      }
      if($user->he_is==5){
        $membre = new Membre();
        $membre->save();
      }
      if($request->hasFile('photo')){
        $user->photo = $request->photo->store('photo');
      }
      $user->save();
      return redirect('users');
    }
    public function ConsulterUser($id){
      $user = User::find($id);
      return view('adminpages.pp',['user'=> $user]);
    }
    public function supprimerUser($id, Request $request){
      $user = User::find($id);
      $articl = Articl::find($id);
      $user->articls()->delete();
      $user->delete();

      return redirect('users');
    }
    public function ModifierUser($id){
      $userm = User::find($id);

      return view('adminpages.modiferuser',['userm'=> $userm]);
    }


    public function updateUser($id, Request $request){
      $userm = User::find($id);
      $userm->email =$request->input('email');
      $userm->name = $request->input('name');
      $userm->prenom = $request->input('prenom');
      $userm->telephone = $request->input('telephone');
    
      $userm->cin = $request->input('cin');
      $userm->adresse = $request->input('adresse');
      if($request->hasFile('photo')){
        $user->photo = $request->photo->store('photo');
      }
      $userm->save();
      if($userm->he_is==3){
        return redirect('articlsredacteur');
      }
      elseif ($userm->he_is==2) {
        return redirect('articls');
      }
      elseif ($userm->he_is==4) {
        return redirect('taches');
      }
      elseif ($userm->he_is==5) {
        return redirect('prod/taches');
      }

      else{return redirect('users');}

    }





}
