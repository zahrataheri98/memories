<?php

namespace App\Http\Controllers;

use App\model\Memories;
use Illuminate\Http\Request;
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
    public function index()
    {
        $memories = Memories::where('user_id',Auth::user()->id)->get();
        return view('list',compact('memories'));    }
}
