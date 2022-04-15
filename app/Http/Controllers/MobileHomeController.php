<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class MobileHomeController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function mobileLogin(Request $request){
    

        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
           //dd("login now");    
            return redirect()->route('mobDashboard');
        }else{
            return redirect()->route('mobLogin')->withErrors(['email' => 'These credentials do not match our records']);
        }       
    }

    public function MobDashboard(Request $request){
        // dd("dsfds");

        return view('mobwelcome');
    }//Dashboard

  public function logout(Request $request) {
 
        DB::table('login_session')->where('user_id', Auth::user()->id)->where('status','Active')->update(['status'=>'Inactive']);
      Auth::logout();
      return redirect('/mobile-login');
}



}
