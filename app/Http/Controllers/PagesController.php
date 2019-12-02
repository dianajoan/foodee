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
		return view('web.about');
	}

	public function blog()
	{
		return view('web.blog');
	}

	public function blogsingle()
	{
		return view('web.blog-single');
	}

	public function cart()
	{
		return view('web.cart');
	}

	public function checkout()
	{
		return view('web.checkout');
	}

	public function productsingle()
	{
		return view('web.product-single');
	}

	public function shop()
	{
		return view('web.shop');
	}

	public function wishlist()
	{
		return view('web.wishlist');
	}

	public function contact()
	{
		return view('web.contact');
	}

	public function careers()
	{
		return view('web.careers');
	}

	public function faq()
	{
		return view('web.more.faq');
	}

	public function help()
	{
		return view('web.more.help');
	}

	public function privacy()
	{
		return view('web.more.privacy');
	}

	public function terms()
	{
		return view('web.more.terms');
	}

}
