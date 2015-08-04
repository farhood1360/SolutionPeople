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

Route::get('/', 'HomeController@showWelcome');

//Route::get('/', array(
//	'before' => array('newyear'|'valentines'|'haloween'|'birthdate:8/1'),
//	'after' => 'logvisits',
//	function()
//{
//	return View::make('hello');
//}));

Route::get('about', array('before' => 'newyear', 'uses' => 'AboutController@showAbout'));
Route::get('about/{theSubject}', 'AboutController@showSubject');
Route::get('about/directions', array('uses' => 'AboutController@showDirections', 'as' => 'directions'));


//Route::get('about', function()
//{
//	return 'About studio';
//});

//
//Route::get('where', function()
//{
//	return Redirect::route('directions');
//});
//
//
//Route::get('about/direction', array('as' => 'directions', function()
//{
//	$theURL = URL::route('directions');
//	return $theURL;
//}));
////
//Route::get('where', function()
//{
//	return Redirect::route('directions');
//});
//
//
//Route::get('about/direction', array('as' => 'directions', function()
//{
//	$theURL = URL::route('directions');
//	return $theURL;
//}));
//


Route::any('submit-form', function()
{
	return 'Process FORM.';
});


//Route::get('about/{theSubject}', function($theSubject)
//{
//	return $theSubject . ' goes here!';
//});


//Route::get('about/classes/{theSubject}', function($theSubject)
//{
//	return "Content on $theSubject";
//});


//Route::get('about/classes/{theArt}/{theSepc}', function($theArt, $theSepc)
//{
//	return "Welcome to $theSepc in $theArt";
//});


Route::get('vote', array(
	'before'  => 'age:22',
	function()
{
		return 'Vote!';
}));