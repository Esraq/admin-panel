<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AdminContactController extends Controller
{
    public function index(){


       $contacts = DB::select('select * from informations');
       view()->share('contacts', $contacts);
     

    	return view('admin/contact');
    }

    public function store(Request $request){


     /// $contact=new Information;
       
         
         $this->validate($request,[

          
          
          
          'address' => 'required|min:5',
            'email' => 'required|email',
           'phone' => 'required|min:8',
             'fb'=>'required|min:8', 
             'twitter'=>'required|min:8', 
             'google'=>'required|min:8', 
             'linkedin'=>'required|min:8', 
             'youtube'=>'required|min:8'

            
            

         
           ]);




       
        $address=$request->get('address');
        $phone=$request->get('phone');
        $email=$request->get('email');
        $fb=$request->get('fb');
        $twitter=$request->get('twitter');
        $google=$request->get('google');
        $linkedin=$request->get('linkedin');
        $youtube=$request->get('youtube');

        DB::insert('insert into informations (address,phone,email,fb,twitter,google,linkedin,youtube) values(?,?,?,?,?,?,?,?)',[$address,$phone,$email,$fb,$twitter,$google,$linkedin,$youtube]);
          
        
       return redirect('contact-admin')->with('success', true);




    }
   
   public function show($id) {
      $contacts = DB::select('select * from informations where id = ?',[$id]);
      return view('admin/contact_edit',['contacts'=>$contacts]);
      ///return view('admin/banner_edit');

   }
   public function edit(Request $request,$id) {



       $this->validate($request,[

          
          
          
          'address' => 'required|min:5',
            'email' => 'required|email',
           'phone' => 'required|min:8',
             'fb'=>'required|min:8', 
             'twitter'=>'required|min:8', 
             'google'=>'required|min:8', 
             'linkedin'=>'required|min:8', 
             'youtube'=>'required|min:8'

            
            

         
           ]);



        $address=$request->get('address');
        $phone=$request->get('phone');
        $email=$request->get('email');
        $fb=$request->get('fb');
        $twitter=$request->get('twitter');
        $google=$request->get('google');
        $linkedin=$request->get('linkedin');
        $youtube=$request->get('youtube');
       
        


      DB::update('update informations set address = ?,phone = ?,email = ?,fb = ?,twitter = ?,google = ?,linkedin = ?, youtube = ? where id = ?',[$address,$phone,$email,$fb,$twitter,$google,$linkedin,$youtube,$id,]);
      return redirect('contact-admin')->with('success', true);
     // echo "Record updated successfully.<br/>";
      //echo '<a href = "/edit-records">Click Here</a> to go back.';
   }




}
