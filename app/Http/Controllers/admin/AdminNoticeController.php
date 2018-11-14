<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notice;
use DB;
class AdminNoticeController extends Controller
{
    public function index(){

    	$notices=Notice::Paginate(10);
        view()->share('notices', $notices);
        return view('admin/notice');
      }
    public function store(Request $request){

        $this->validate($request,[

          
          'number' => 'required|min:5',
            'title' => 'required|min:5'

          


          ]);
        if($request->hasfile('filename'))
        {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        $notice=new Notice;
        $notice->number=$request->get('number');
        $notice->title=$request->get('title');
        $notice->filename=$name;
        $notice->save();
        return redirect('notice-admin')->with('success', true);



    }

    public function destroy($id){

      DB::delete('delete from notices where id = ?',[$id]);
      return redirect('notice-admin')->with('success', true);
    }

    public function show($id){

      $notices = DB::select('select * from notices where id = ?',[$id]);
      return view('admin/notice_edit',['notices'=>$notices]);

    }
    public function edit(Request $request,$id){

     $this->validate($request,[

          
          'number' => 'required|min:3',
          'title' => 'required|min:3',

           ]);

         


      $number = $request->input('number');
      $title = $request->input('title');
      


      DB::update('update notices set number = ?,title = ? where id = ?',[$number,$title,$id,]);
      return redirect('notice-admin')->with('success', true);






    }


}
