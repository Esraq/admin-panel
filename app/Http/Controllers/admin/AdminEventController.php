<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Programme;
use DB;

class AdminEventController extends Controller
{
    
    public function index(){



   
      $programmes=Programme::Paginate(10);
      view()->share('programmes', $programmes);

    
    return view('admin/event');
    

     }


   public function store(Request $request){
       
    $this->validate($request,[

          
          'number' => 'required|min:1',
           'date' => 'required|min:3',
          'title' => 'required|min:3',
          'description'=>'required|min:20', 

           ]);




       if($request->hasfile('filename'))
        {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        $programme=new Programme;
       
        $programme->number=$request->get('number');
        $programme->date=$request->get('date');
        

        $programme->title=$request->get('title');
        $programme->description=$request->get('description');
        $programme->filename=$name;
        $programme->save();
        return redirect('event-admin')->with('success', true);
    

      }
    
    

    public function destroy($id) {
      DB::delete('delete from programmes where id = ?',[$id]);
      return redirect('event-admin')->with('success', true);
    
   }


   public function show($id){

        
       $events = DB::select('select * from programmes where id = ?',[$id]);
      return view('admin/event_edit',['events'=>$events]);


   }


   public function edit(Request $request,$id){
 
         $this->validate($request,[

          
          'number' => 'required|min:1',
           'date' => 'required|min:3',
          'title' => 'required|min:3',
          'description'=>'required|min:20', 

           ]);

         


      $number = $request->input('number');
      $date=$request->input('date');
      $title = $request->input('title');
      $description=$request->input('description');


      DB::update('update programmes set number = ?,date=?,title = ?,description = ? where id = ?',[$number,$date,$title,$description,$id,]);
      return redirect('event-admin')->with('success', true);

   }



}
