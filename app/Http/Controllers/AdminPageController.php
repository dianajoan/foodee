<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class AdminPageController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
	    $users 	= User::latest()->paginate(5);
		$roles 	= Role::latest()->paginate(5);

	    return view('admin.index', compact(['users','roles']));
	}
}
