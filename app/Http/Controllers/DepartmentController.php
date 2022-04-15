<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth; 
use Session; 
use App\User;
use App\Department;
class DepartmentController extends Controller{
    

    public function index(Request $request){

        $data['users']=Department::get();
        $data['count'] = 1;
        return view('department.index', $data);

    }//index



    public function AddDept(Request $request){


        if($request->method()=="POST")
        {
            $validated = $request->validate([  
                'name' => 'required|unique:departments|max:50',  
            ]);
             $input=$request->input();
             $user=new Department;
             $user->name=$input['name'];
             $user->description=$input['description'];  
             $user->created_by=Auth::user()->id;
             $user->save();
              Session::flash('success', 'Department Created successfully!'); 
         return redirect('Departments');
        }

        $data['count'] = 1;
        return view('department.add', $data);

    }



        public function EditDept(Request $request, $id){
 
         if($request->method()=="POST")
        {
            $validated = $request->validate([  
                'name' => 'required|max:50|unique:departments,name,'.$id,  
            ]);
             $input=$request->input();
             $user=Department::find($id);
             $user->name=$input['name'];
             $user->description=$input['description'];  
             $user->updated_by=Auth::user()->id;
             $user->save();
              Session::flash('success', 'Department Updated successfully!'); 
         return redirect('Departments');
        }

        $data['count'] = 1;
         $data['dept'] = Department::find($id);
        return view('department.edit', $data);

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
