<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Counsellor;
use App\Models\User;
use Illuminate\Http\Request;

class APIAppointmentController extends Controller
{
    public function index(){
        $data = User::all();
        return   $data;
    }
}
