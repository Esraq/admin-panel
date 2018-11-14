<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;

class MonitorBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    public function index()
    {
        $banners=Banner::Paginate(10);

        view()->share('banners', $banners);
        return view('admin/site');
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
        $banner=new Banner;
       
       
        $banner->title=$request->get('title');
        $banner->description=$request->get('description');
        $banner->weight=$request->get('weight');
        $banner->filename=$name;
        $banner->save();
        return redirect('banner-admin')->with('success', true);
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
        $banner =Banner::find($id);
        return view('admin/banner_edit',compact('banner','id'));
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
        $banner= \App\Banner::find($id);
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
        

                
        
       
    
        $banner->title=$request->get('title');
        $banner->description=$request->get('description');
        $banner->filename=$name;
        $banner->weight=$request->get('weight');
        

        $banner->save();
        return redirect('banner-admin')->with('success', true);


        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = \App\Banner::find($id);
        $banner->delete();
        return redirect('banner-admin')->with('success', true);
    }
}
