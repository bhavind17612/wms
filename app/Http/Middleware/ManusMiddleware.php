<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use DB;
class ManusMiddleware
{





    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $logins = DB::table('login_session')->where('session_id', session()->getId())->first();


        if ($logins){
          
              $start = strtotime($logins->last_access);
                $end = strtotime(date('Y-m-d H:i:s'));
                $mins = ($end - $start) / 60;


             if($mins>$logins->timeout){   
             DB::table('login_session')->where('session_id', session()->getId())->update(['status'=>'Inactive']);
              Auth::logout();
                return redirect('/login');
         }else{

             DB::table('login_session')->where('session_id', session()->getId())->update(['last_access' =>date('Y-m-d H:i:s')]);

         }


        }else{

        $insert = array(
                        'session_id'=>session()->getId(),
                        'user_id' => Auth::user()->id,
                        'last_access' =>date('Y-m-d H:i:s'),
                        'timeout' =>'30' ,
                        'status'=>'Active',
                         );

        DB::table('login_session')->insert($insert);
        }

       
        return $next($request);
    }
}
