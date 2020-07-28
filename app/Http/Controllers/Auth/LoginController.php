<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     protected function authenticated(Request $request, $user)
{
if ( $user->he_is == 0 ) {// do your margic here
    return redirect('users');
}else if($user->he_is == 1){
  return redirect('journaliste/'.$user->id);
}else if($user->he_is == 2){
  return redirect('articls');
}else if($user->he_is == 3){
  return redirect('articlsredacteur/');
}else if($user->he_is == 4){
  return redirect('taches');
}else if($user->he_is == 5){
  return redirect('prod/taches');
}
//articls  taches  articlsredacteur  prod/taches
 return redirect('/home');
}
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
