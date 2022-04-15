<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Auth; 
use Session; 
use App\User;
use App\Menu;
class MenuController extends Controller{
    

    public function index(Request $request)
	{
        $data['users']=Menu::get();
        $data['count'] = 1;
        return view('menu.index', $data);
    }//index

    public function AddMenu(Request $request)
	{	
        if($request->method()=="POST")
        {
            $validated = $request->validate([  
											'name' 				=> 'required|unique:menus|max:50',  
											'transaction_type' 	=> 'required|max:50',  
											'description' 		=> 'required|max:50',  
											]);
            $input					=$request->input();
            $menu					=new Menu;
            $menu->name				=$input['name'];
            $menu->transaction_type	=$input['transaction_type'];  
			$menu->description		=$input['description'];  
            $menu->created_by		=Auth::user()->id;
			$menu->created_by		=Auth::user()->id;
            $menu->save();
            Session::flash('success', 'Menu Created successfully!'); 
			return redirect('Menus');
        }
        $data['count'] = 1;
        return view('menu.add', $data);
    }



	public function EditMenu(Request $request, $id)
	{
 
        if($request->method()=="POST")
        {
            $validated = $request->validate([  
											'name' => 'required|max:50|unique:menus,name,'.$id, 
											'transaction_type' 	=> 'required|max:50',  
											'description' 		=> 'required|max:50',  
										]);
            $input					=$request->input();
			$menu					=Menu::find($id);
            $menu->name				=$input['name'];
            $menu->transaction_type	=$input['transaction_type'];  
			$menu->description		=$input['description'];  
			$menu->updated_by		=Auth::user()->id;
            $menu->save();
            Session::flash('success','Menu Updated successfully!'); 
			return redirect('Menus');
        }
        $data['count'] = 1;
        $data['dept'] = Menu::find($id);
        return view('menu.edit',$data);
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
