<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function about()
	{
		return view('web.about');
	}

	public function contact()
	{
		return view('web.contact');
	}

	public function careers()
	{
		return view('web.careers');
	}

	public function menu()
	{
		return view('web.menu');
	}

	public function offers()
	{
		return view('web.offers');
	}

	public function products()
	{
		return view('web.products');
	}

}
