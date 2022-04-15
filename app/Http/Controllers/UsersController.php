<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth; 
use Session; 
use App\User;
class UsersController extends Controller{
    

    public function Users(Request $request){

        $data['users']=User::where('is_deleted','No')->get();
        $data['count'] = 1;
        return view('users.index', $data);

    }//Users



    public function AddUsers(Request $request){


        if($request->method()=="POST")
        {
            $validated = $request->validate([ 
                'first_name' => 'required|max:50',
                'last_name' => 'required|max:50',
                'email' => 'required|unique:users|max:100',
                'username' => 'required|unique:users|max:50',
                'password' => 'required|max:50',
                'status' => 'required',
            ]);
             $input=$request->input();
             $user=new User;
             $user->first_name=$input['first_name'];
             $user->last_name=$input['last_name']; 
             $user->email=$input['email'];
             $user->username=$input['username']; 
             $user->password=bcrypt($input['password']);
             $user->status=$input['status'];
             $user->updated_by=Auth::user()->id;
             
              $user->save();
              Session::flash('success', 'User Added successfully!'); 
         return redirect('Users');
        }

        $data['count'] = 1;
        return view('users.add', $data);

    }



        public function EditUsers(Request $request, $id){
 
        if($request->method()=="POST")
        {
            $validated = $request->validate([ 
                'first_name' => 'required|max:50',
                'last_name' => 'required|max:50',
                'email' => 'required|max:100|unique:users,email,'.$id,
                'username' => 'required|max:50|unique:users,username,'.$id,
                'password' => 'max:50',
                'status' => 'required',
            ]);
             $input=$request->input();
             $user=User::find($id);
             $user->first_name=$input['first_name'];
             $user->last_name=$input['last_name']; 
             $user->email=$input['email'];
             $user->username=$input['username'];
             if ($input['password']) {
             $user->password=bcrypt($input['password']);
              } 
             $user->status=$input['status'];
             $user->updated_by=Auth::user()->id;
             
              $user->save();
              Session::flash('success', 'User Updated successfully!'); 
               return redirect('Users');
        }

        $data['count'] = 1;
         $data['user'] = User::find($id);
        return view('users.edit', $data);

    }


  public function DeleteUsers(Request $request, $id){

    $user=User::find($id);
    $user->status="Inactive";
    $user->is_deleted="Yes";
    $user->save();
      Session::flash('success', 'User Deleted successfully!'); 
               return redirect('Users');

  }
}
