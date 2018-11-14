<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use DB;

class AdminUserController extends Controller
{
    public function index(){

     
    $users=User::all();
    view()->share('users',$users);
     //view()->share('contacts', $contacts);
     



    	return view('admin/user_list');
    }
    
     public function destroy($id) {
      DB::delete('delete from users where id = ?',[$id]);
      return redirect('user_list')->with('success', true);
    
   }
}
