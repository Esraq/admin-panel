<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Photo;
use DB;
class AdminPhotoController extends Controller
{
    public function index(){

     
    $photos=Photo::Paginate(10);
    view()->share('photos',$photos);
     //view()->share('contacts', $contacts);
     



    	return view('admin/photo');
    }

    public function store(Request $request){

     

         $this->validate($request,[

          
          'title' => 'required|min:3',
          'filename' => 'required|min:1'
          

          ]);




         if($request->hasfile('filename'))
        {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        $photo=new Photo;
       
       
        $photo->title=$request->get('title');
        $photo->filename=$name;
        $photo->save();
         return redirect('photo-admin')->with('success', true);




   }

   public function destroy($id){

      DB::delete('delete from photos where id = ?',[$id]);
      return redirect('photo-admin')->with('success', true);
    }


}
