<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;

class MonitorMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
        
      public function index(){
      
       //$members=Member::all();
       $members=Member::orderBy('weight','desc')->Paginate(10);
       view()->share('members', $members);
     
      
       return view('admin/member');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

          
          
           
          'title' => 'required|min:3',
          'description'=>'required|min:4', 
          'weight'=>'required|min:1', 
           'filename'=>'required|min:1'
           ]);



         if($request->hasfile('filename'))
        {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        $member=new Member;
       
       
        $member->title=$request->get('title');
        $member->description=$request->get('description');
        $member->weight=$request->get('weight');
        $member->filename=$name;
        $member->save();
        return redirect('member-admin')->with('success', true);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member =Member::find($id);
        return view('admin/member_edit',compact('member','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


         // dd($request['filename']);
        $member= \App\Member::find($id);

        $this->validate($request,[

          
          
           
          'title' => 'required|min:3',
          'description'=>'required|min:4', 
          'weight'=>'required|min:1', 
           'filename'=>'required|min:1'
           ]);

    
      if($request->hasfile('filename'))
        {
            $file = $request->file('filename');

            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);

        }
        

                
        
       
    
        $member->title=$request->get('title');
        $member->description=$request->get('description');
        $member->filename=$name;
        $member->weight=$request->get('weight');
        

        $member->save();
        return redirect('member-admin')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = \App\Member::find($id);
        $member->delete();
         return redirect('member-admin')->with('success', true);
    }
}
