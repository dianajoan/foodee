<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Role;

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
        if (Auth::user()->hasRole(['super-admin','admin']))
            return redirect()->route('admin')->with('success', 'Welcome back ' . Auth::user()->name . ', ' . Role::where('name',Auth::user()->role)->first()->display_name);
        return view('home');
    }

    public function userIndex()
    {
        return view('home')->with('info','Welcome back, ' . ' - ' . Auth::user()->name . '!');
    }
}
