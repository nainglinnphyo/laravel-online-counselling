<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Counsellor;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $userid = auth()->user()->id;
        $data = User::find($userid);
        $counsellors = $data->counsellors;
        return view('appointment.index',['counsellors'=>$counsellors]);
       
    }

    public function store($cs_id,Request $request){
        $this->validate($request,[
            'time'=> 'required'
        ]);
        // dd($request->time);
        $userid = auth()->user()->id;
        Appointment::create([
            'user_id'=>$userid,
            'counsellor_id'=>$cs_id,
            'time' =>$request->time,
        ]);
        return redirect()->route('home');
    }
}
