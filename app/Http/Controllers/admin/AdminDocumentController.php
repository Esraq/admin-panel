<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Document;
use DB;

class AdminDocumentController extends Controller
{

	public function index(){

     
    $documents=Document::Paginate(10);
    view()->share('documents',$documents);
     //view()->share('contacts', $contacts);
     



    	return view('admin/document');
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
        $document=new Document;
       
       
        $document->title=$request->get('title');
        $document->filename=$name;
        $document->save();
         return redirect('document-admin')->with('success', true);




   }

   public function destroy($id){

      DB::delete('delete from documents where id = ?',[$id]);
      return redirect('document-admin')->with('success', true);
    }


}




