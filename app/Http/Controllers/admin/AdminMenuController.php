<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
use DB;

class AdminMenuController extends Controller
{
    public function index(){

     $menus=Menu::all();
      view()->share('menus', $menus);
    return view('admin/menu');

  }
  public function menu_store(Request $request){

        
       $this->validate($request,[

          
          'name' => 'required|min:3',
          'destination' => 'required|min:1'
          

          ]);


        $menu=new Menu;
       
        $menu->name=$request->get('name');
        $menu->parent_id=$request->get('destination');
        
        $menu->save();
        return redirect('menu-show')->with('success', true);
    
        //echo "done";


   }

   public function menu_list(){

     $menus=Menu::all();

     return view('admin/menu_list',compact('menus'));


   }

   public function destroy($id) {
      DB::delete('delete from menus where id = ?',[$id]);
      return redirect('menu-show')->with('success', true);
    
   }

   public function show($id) {
      $menus = DB::select('select * from menus where id = ?',[$id]);
      return view('admin/menu_edit',['menus'=>$menus]);
      ///return view('admin/banner_edit');

   }
   public function edit(Request $request,$id) {



     $this->validate($request,[

          
          'name' => 'required|min:3',
          'destination' => 'required|min:1'
          

          ]);


      $name = $request->input('name');
      $destination = $request->input('destination');
      
       
        


      DB::update('update menus set name = ?,parent_id = ? where id = ?',[$name,$destination,$id,]);
      return redirect('menu-show')->with('success', true);
     // echo "Record updated successfully.<br/>";
      //echo '<a href = "/edit-records">Click Here</a> to go back.';
   }


}
