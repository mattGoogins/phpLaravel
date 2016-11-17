<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {

    // create an 'art' table
    // Schema::create('art', function($newtable)
    // {
    //   $newtable->increments('id');
    //   $newtable->string('artist');
    //   $newtable->string('title', 500);
    //   $newtable->text('description');
    //   $newtable->date('created');
    //   $newtable->date('exhibition_date');
    //   // timestamps function creates "created_at" and "updated_at" columns
    //   $newtable->timestamps();
    // });

    // add a 'alumni column to the 'art' table
    // remove the 'exhibition_date' column from the 'art' table
    // Schema::table('art', function($newtable)
    // {
    //     $newtable->boolean('alumni');
    //     $newtable->dropColumn('exhibition_date');
    // });

    return view('welcome');
});

// if passed route is windward, route to hello.php view
// in the root of the resources/views folder
Route::get('windward', function () {
    return view('hello');
});

// initial "about us" Route... to a simple route at the root of the web
// to try it, go to http://localhost/about
// FYI, the /about route is same as about route, it just explicitly states the root /
Route::get('about', function () {
    // return 'Hello world!';
    return view('about');
});

Route::get('services', function () {
    return view('services');
});

Route::get('news', function () {
    return view('news');
});

// initial "about us/directions" Route... to a simple path route off the root of the web
// to try it, go to http://localhost/about/directions
Route::get('about/directions', function () {
    return 'Hello world! To get directions to the web, use Google.';
});

// here, the route includes a parameter
// to try it, go to http://localhost/about/? where ? = any value except 'directions' (because 'directions is a prescribed route')
Route::get('about/{theSubject}', function ($theSubject) {
    return $theSubject . ' content goes here!';
});

// here, the route includes a parameter
// to try it, go to http://localhost/about/classes/? where ? = any value, (except a prescribed route!)
Route::get('about/classes/{theSubject}', function ($theSubject) {
    // the following line will not work, because in Laravel, you must use double-quotes
    // return 'Information about the {$theSubject} class goes here!';
    return "Information about the {$theSubject} class goes here!";
});
