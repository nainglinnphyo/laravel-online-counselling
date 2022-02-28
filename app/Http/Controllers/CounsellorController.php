<?php

namespace App\Http\Controllers;

use App\Models\Counsellor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CounsellorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function details (Request $request,$id){
        $counsellor = Counsellor::Find($id);
        // dd(storage_path('app/public/images/test.jpg'));
        return view('counsellor.details',['counsellor'=>$counsellor]);
    }

    public function index(){
        return view('counsellor.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'image'=> 'required',
            'counsellor_name'=> 'required',
            'counsellor_details'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'details'=> 'required',
        ]);
        $image_name = time().'.'.$request->image->extension();  
        $image = $request->file('image');
        $image->move(public_path('/images'),$image_name);
        $image_path = "/images/" . $image_name;
        Counsellor::create([
            'counsellor_name'=>$request->name,
            'counsellor_details'=>$request->details,
            'image'=>$image_path,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        return redirect()->route('home');

    }

    public function edit (Request $request,$id){
        $counsellor = Counsellor::Find($id);
        return view('counsellor.edit',['counsellor'=>$counsellor]);
    }

    public function update (Request $request,$id){
        $cs = Counsellor::find($id);
        $cs->counsellor_name = $request->name;
        $cs->counsellor_details = $request->details;
        $cs->email = $request->email;
        $cs->update();
        return redirect()->route('home');
    }

    public function delete($id){
        $cs = Counsellor::find($id);
        $cs->delete();

        return redirect()->route('home');
    }

}
