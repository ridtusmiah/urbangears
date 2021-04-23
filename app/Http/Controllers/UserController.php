<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{ 

		public function index(){
			return view('admin.pages.create-user');
		}

    public function userList(){
            $user = User::all();
             return view('admin.pages.user-list', compact('user'));
      }


    public function storeUser(Request $request){
      $username = $request->username;
      $email = $request->email;
      $password = $request->password;
      $role = $request->role;
         $gender = $request->gender;

      $obj = new User();
      $obj->username = $username;
      $obj->email = $email;
      $obj->password = $password;
      $obj->role = $role;
         $obj->gender = $request->gender;



      if ($obj->save()) {
        echo "Success";
      }
   } 




    public function editUser($id){
         $user = User::find($id);
        return view('admin.pages.editUser', compact('user'));
      }



    

    public function updateUser(Request $request, $id){
      
      $user = User::find($id);

      $user->username = $request->username;
      $user->email = $request->email;
      $user->role = $request->role;
      $user->gender = $request->gender;
      if($user->save())
        {
           
            return redirect()->back()->with(['msg' => 1]);
        }
        else
        {
            return redirect()->back()->with(['msg' => 2]);
        }

    }





    public function deleteUser($id){
       $obj = User::find($id);
        if($obj->delete())
        {
           
            return redirect()->back()->with(['msg' => 1]);
        }
        else
        {
            return redirect()->back()->with(['msg' => 2]);
        }

}
}
