<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('home');
	}

	public function showSecret()
	{
		return View::make('secret');
	}

	public function showDownloads()
	{
		return View::make('downloads');
	}

	public function showFaq()
	{
		return View::make('faq');
	}

	public function showAgreement()
	{
		return View::make('agreement');
	}

}
