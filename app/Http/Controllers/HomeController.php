<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Content;
use App\Notes;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $email=Auth::user()->email;
        $content = Content::orderBy('id','ASC')->paginate(15);
        return view('home',compact('content','email'))
            ->with('i', ($request->input('page', 1) - 1) * 15);
    }
    public function viewdoc(Request $request,$id)
    {
         $doc=Content::find($id);
        $docname=$doc->file_name;
        $email=Auth::user()->email;
        $notes=Notes::orderBy('id','DESC')->where('doc_id',$id)->where('email',$email)->get();
        $content = Content::orderBy('id','ASC')->paginate(15);
        return view('viewdoc',compact('content','id','docname','notes','email'))
            ->with('i', ($request->input('page', 1) - 1) * 15);
    }

    public function take_notes(Request $request)
    {
        $input=$request->all();
        Notes::create($input);
        return back()->with('status','successfully made some notes');
    }

    
    
    public function upload_content(Request $request)
    {
     
        $this->validate($request, [
        'name' => ['required', 'min:4'],
        'reference' => ['required', 'min:7', 'unique:contents'],
        'description' => ['required', 'min:4'],
        'file_name' => 'mimes:jpeg,png,pdf',
    ]);
    
            $file = $request->file('file_name');
            
            $filename = time() . '.' . $request->file('file_name')->extension();
            $filePath = public_path() . '/files/uploads/';
            $file->move($filePath, $filename);

            Content::create(['name'=>$request->input('name'),'reference'=>$request->input('reference'),
            'description'=>$request->input('description'),'file_name'=>$filename
            ]);

            return back()->with('status','You have successfully captured document data');

    }
}
