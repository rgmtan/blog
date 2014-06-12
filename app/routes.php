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

Route::get('/', function()
{
    $users = DB::table('employees')->get();
    var_dump($users);
});
/*
Route::get('/', function()
{
    $title = "L4 Basics";
    return View::make('home.index')->with('title', $title);
});

Route::post('/', function()
{
    $input = Input::all();
    DB::insert('INSERT INTO customers (CustomerID, CompanyName) VALUES(?,?)', array($input['cid'], $input['cname']));
});

Route::get('about', function()
{
    return "This is about us";
});*/
