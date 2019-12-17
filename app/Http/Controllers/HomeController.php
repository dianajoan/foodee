<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->hasRole(['super-admin','admin'])) {
            return redirect()->route('admin')->with('info','Welcome back, ' . (Role::where('name',Auth::user()->role)->first())->display_name . ' - ' . Auth::user()->name . '!');
        }
        elseif (Auth::user()->hasRole(['attendant'])) {
            return view('home')->with('info','Welcome back, ' . ' - ' . Auth::user()->name . '!');
        }
        return view('home')->with('info','Welcome back, ' . ' - ' . Auth::user()->name . '!'); 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userIndex()
    {
        return view('home')->with('info','Welcome back, ' . ' - ' . Auth::user()->name . '!');
    }
}
