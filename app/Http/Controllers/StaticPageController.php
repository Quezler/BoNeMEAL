<?php namespace App\Http\Controllers;

class StaticPageController extends Controller {

	public function __construct()
	{
		//$this->middleware('guest');
	}

	public function index()
	{
		return view('index');
	}

	public function about()
	{
		return view('about');
	}

}