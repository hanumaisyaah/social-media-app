<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use DB;
use App\Models\Oracle;
class HomeController extends Controller
{

    public function oracle()
    {
        $data = new Oracle;
        return $data;
    }
    
    public function index()
    {
        $post = DB::table('post')->get();
        return view('home', compact('post'));
    }
}
