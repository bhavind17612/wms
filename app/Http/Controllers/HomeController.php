<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('Dashboard');
    }

    public function Dashboard(Request $request){
        return view('welcome');
    }//Dashboard

  public function logout(Request $request) {
 
        DB::table('login_session')->where('user_id', Auth::user()->id)->where('status','Active')->update(['status'=>'Inactive']);
      Auth::logout();
      return redirect('/login');
}



}
