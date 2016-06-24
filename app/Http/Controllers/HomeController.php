<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$user = User::where('active', 1)->count();*/
        $utilController = new UtilController();
        $userInfo = $utilController->ip_info("189.115.200.192", "Location");

        return view('home')->with(compact('userInfo'));
    }

    public function notToday(){
          return view('nope');
    }
}
