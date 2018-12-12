<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/home');
    }

    public function login()
    {
        return view('login');
    }
    public function call()
    {
        return view('call');
    }
    public function call_action()
    {
        echo "submit success";

    }

    public function admin_home()
    {
        return view('admin/home');
    }
}
