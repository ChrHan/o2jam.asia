<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', 'HomeController@showWelcome');
Route::get('/downloads', 'HomeController@showDownloads');
Route::get('/faq', 'HomeController@showFaq');
Route::get('/agreement', 'HomeController@showAgreement');

// Authentication
Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@getLogout');

// Secure-Routes
Route::group(array('before' => 'auth'), function()
{
	Route::get('secret', 'HomeController@showSecret');
});

// Wiki purposes
Route::get('wiki', function() { return Redirect::to('wiki/Home'); });
Route::get('wiki/{page}', 'WikiController@showPage');
Route::get('docs', function() { return Redirect::to('docs/Start'); });
Route::get('docs/{page}', 'DocsWikiController@showPage');

$app->bind('WikiController', function($app) {
	$repository = new WikipageRepository;
	$repository->setDatapath(base_path() . '/app/wiki');

	return new WikiController($repository);
});

$app->bind('DocsWikiController', function($app) {
	$repository = new WikipageRepository;
	$repository->setDatapath(base_path() . '/app/docs');

	return new WikiController($repository);
});