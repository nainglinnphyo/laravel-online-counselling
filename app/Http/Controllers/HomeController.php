<?php

namespace App\Http\Controllers;

use App\Models\Counsellor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index (){
        $counsellors = Counsellor::paginate(2);
        return view('counsellor.index', ['counsellors' => $counsellors]);
    }

    public function adminHome()
    {
        return view('admin.home');
    }
}
