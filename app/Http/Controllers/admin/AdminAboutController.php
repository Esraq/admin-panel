<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;
use DB;

class AdminAboutController extends Controller
{
    


      public function index(){

        $abouts=About::all();

        view()->share('abouts', $abouts);
        return view('admin/about');
    
    }

     public function store(Request $request)
    {
        


      $this->validate($request,[

          
          'title' => 'required|min:5',
          'short_description' => 'required|min:20',
           'description' => 'required|min:20'
          

          


          ]);


        $about=new About;
       
        $about->title=$request->get('title');
        $about->short_description=$request->get('short_description');
        $about->description=$request->get('description');

        
        $about->save();
        return redirect('about-admin')->with('success', true);
    
    
       // return redirect('event_list');

    }
    
     public function destroy($id) {
      DB::delete('delete from abouts where id = ?',[$id]);
      return redirect('about-admin')->with('success', true);
      //echo "Record deleted successfully.<br/>";
      //echo '<a href = "/delete-records">Click Here</a> to go back.';
   }
   public function show($id) {
      $abouts = DB::select('select * from abouts where id = ?',[$id]);
      return view('admin/about_edit',['abouts'=>$abouts]);
      ///return view('admin/banner_edit');

   }
   public function edit(Request $request,$id) {

     
     $this->validate($request,[

          
          'title' => 'required|min:5',
          'short_description' => 'required|min:20',
           'description' => 'required|min:20'
          

          


          ]);


       $title = $request->input('title');
      $short_description = $request->input('short_description');
       $description = $request->input('description');
      

      DB::update('update abouts set title = ?,short_description = ?,description=? where id = ?',[$title,$short_description,$description,$id,]);
      return redirect('about-admin')->with('success', true);
     // echo "Record updated successfully.<br/>";
      //echo '<a href = "/edit-records">Click Here</a> to go back.';
   }
  



























}
