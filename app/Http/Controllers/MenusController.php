<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth; 
use Session; 
use App\User;
use App\Department;
use App\Transaction;
use App\Menu;
class MenusController extends Controller{
    

    public function index(Request $request){

        $data['list']=Menu::get();
        $data['count'] = 1;
        return view('menu.index', $data);

    }//index



    public function AddTran(Request $request){


        if($request->method()=="POST")
        {
            $validated = $request->validate([  
                'name' => 'required|unique:transaction|max:50', 
                'type' => 'required',  
                'uri' => 'required|max:100', 
                'description' => 'max:100',  
            ]);
             $input=$request->input();
             $user=new Transaction;
             $user->name=$input['name'];
             $user->description=$input['description']; 
             $user->type=$input['type']; 
             $user->uri=$input['uri'];  
             $user->created_by=Auth::user()->id;
             $user->save();
              Session::flash('success', 'Transaction Created successfully!'); 
         return redirect('Transaction');
        }

        $data['count'] = 1;
        return view('transaction.add', $data);

    }



        public function EditTran(Request $request, $id){
 Session::flash('success', 'Transaction Created successfully!'); 
         return redirect('Transaction');
         if($request->method()=="POST")
        {
             $validated = $request->validate([  
                'name' => 'required|unique:transaction|max:50', 
                'type' => 'required',  
                'uri' => 'required|max:100', 
                'description' => 'max:100',  
            ]);
             $input=$request->input();
             $user=Transaction::find($id);
            $user->name=$input['name'];
             $user->description=$input['description']; 
             $user->type=$input['type']; 
             $user->uri=$input['uri'];  
             $user->updated_by=Auth::user()->id;
             $user->save();
              Session::flash('success', 'Transaction Created successfully!'); 
         return redirect('Transaction');
        }

        $data['count'] = 1;
         $data['dept'] = Transaction::find($id);
        return view('transaction.edit', $data);

    }


  public function DeleteDept(Request $request, $id){

    $check=User::where('dept_id', $id)->get();

    if (count($check)>0) {
       Session::flash('error', 'Department is assigned to user, please dis-associate to delete the department'); 
       return redirect('Departments');
    }

     $user=Department::where('id', $id)->delete();  
      Session::flash('success', 'Department Deleted successfully!'); 
       return redirect('Departments');

  }
}
