<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Banner;
use App\About;
use App\Notice;
use App\Programme;
use App\Member;
use App\Menu;
use App\Contact;
use App\Information;
use App\Photo;
use App\Vido;
use App\Document;
use DB;
class AdminIndexController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth');
    }



   /* public function index(){

        return view('admin/site');
    }
    public function store(Request $request)
    {


        if($request->hasfile('filename'))
        {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        $banner=new Banner;
       
        $banner->title=$request->get('title');
        $banner->description=$request->get('description');
        $banner->filename=$name;
        $banner->save();
        echo "done";
       /// return redirect('event_list')->with('success', true);
    
    
       // return redirect('event_list');

    }
    public function banner_list(){

        $banners=Banner::all();
        return view('admin/banner_list',compact('banners'));

    } 
    public function destroy($id) {
      DB::delete('delete from banners where id = ?',[$id]);
      echo "Record deleted successfully.<br/>";
      //echo '<a href = "/delete-records">Click Here</a> to go back.';
   }
   public function show($id) {
      $banners = DB::select('select * from banners where id = ?',[$id]);
      return view('admin/banner_edit',['banners'=>$banners]);
      ///return view('admin/banner_edit');

   }
   */

  public function show($id) {
      $menus = DB::select('select * from titles where id = ?',[$id]);
      return view('admin/edit_title',['titles'=>$titles]);
      ///return view('admin/banner_edit');

   }



   public function edit_title(Request $request,$id) {
      $name = $request->input('name');
      ///$description = $request->input('description');
      
       
        


    
      DB::update('update titles set name = ? where id = ?',[$name,$id,]);
      echo "Record updated successfully.<br/>";
      //echo '<a href = "/edit-records">Click Here</a> to go back.';
   }
  

 /* public function about_show(){



      return view('admin/about');

  }

   public function about_store(Request $request){

       $about=new About;
       
        $about->title=$request->get('title');
        $about->description=$request->get('description');
        
        $about->save();
        echo "done";


   }

    public function notice_store(Request $request){

       
        /*  $rules=[

            'number' => 'required|min:5','The email may not be greater than 255 characters.',
            'title' => 'required|min:5','The email may not be greater than 255 characters.'

        ];
        $value=[
            'number' => $request->get('number'),
            'title' => $request->get('title')

        ];
       
        $validator=Validator::make($value,$rules);

         if($validator->fails()){

            //return 'failes';
          return redirect('notice-admin')
                        ->withErrors($validator)
                        ->withInput();

        }
        */
         //if($validator->passes()) {
        /*$this->validate($request,[

          
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
        echo "done";
        ///}


   }

   public function notice_show(){



      return view('admin/notice');

  }
  public function event_show(){



      return view('admin/event');

  }



  public function event_store(Request $request){

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
        echo "done";


   }
  public function member_show(){


    return view('admin/member');

  }
  public function member_store(Request $request){

         if($request->hasfile('filename'))
        {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        $member=new Member;
       
       
        $member->title=$request->get('title');
        $member->description=$request->get('description');
        $member->size=$request->get('size');
        $member->filename=$name;
        $member->save();
        echo "done";


   }
 public function menu_show(){


    return view('admin/menu');

  }
public function menu_store(Request $request){

        
        $menu=new Menu;
       
       
        $menu->name=$request->get('name');
        $menu->parent_id=$request->get('destination');
        
        $menu->save();
        echo "done";


   }

 public function contact_show(){


    return view('admin/contact');

  }  
  public function photo_show(){


    return view('admin/photo');

  }  
   public function contact_store(Request $request){

        
        $contact=new Information;
       
       
        $address=$request->get('address');
        $phone=$request->get('phone');
        $email=$request->get('email');
        $fb=$request->get('fb');
        $twitter=$request->get('twitter');
        $google=$request->get('google');
        $linkedin=$request->get('linkedin');
        $youtube=$request->get('youtube');

        DB::insert('insert into informations (address,phone,email,fb,twitter,google,linkedin,youtube) values(?,?,?,?,?,?,?,?)',[$address,$phone,$email,$fb,$twitter,$google,$linkedin,$youtube]);
          
        
        echo "done";


   }
   public function photo_store(Request $request){

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
        echo "done";


   }
   public function video_show(){


    return view('admin/video');

  }  
  public function video_store(Request $request){

         
        $vido=new Vido;
       
       
        $vido->title=$request->get('title');
        
        $vido->save();
        echo "done";


   }
 public function document_show(){




    return view('admin/document');
 }
 public function document_store(Request $request){

      if($request->hasfile('filename'))
      {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
      }

      $document=new Document;
      $document->title=$request->get('title');
      $document->filename=$name;
      $document->save();
      echo "done";




 }
 */

}
