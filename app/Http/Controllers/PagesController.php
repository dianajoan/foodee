<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
	{
		return view('home');
	}

	public function about()
	{
		return view('about');
	}

	public function contact()
	{
		return view('contact');
	}

	public function careers()
	{
		return view('careers');
	}

	public function menu()
	{
		return view('menu');
	}

	public function offers()
	{
		return view('offers');
	}

	public function products()
	{
		return view('products');
	}

}
