<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
/** login to */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
         $id = Auth::user()->id;
         $data=DB::table('tickets')
              ->join('users', 'users.id', '=', 'tickets.user_id')
              //->where('users.id', '=', $id)
              ->get();
              return view('dashboard', compact('data'));
              
        //return view('dashboard', );
    }
    public function create_ticket()
    {
        return view('ticket/create_ticket');
    }
}
