<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home()
	{
		return view('system.home');
	}

	public function about()
	{
		return view('system.about');
	}

	public function contact()
	{
		return view('system.contact');
	}

	public function faq()
	{
		return view('web.faq');
	}

	public function help()
	{
		return view('web.help');
	}

	public function privacy()
	{
		return view('web.privacy');
	}

	public function terms()
	{
		return view('web.terms');
	}

}
