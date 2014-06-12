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

/*
 * DB::table('employees')->where('Country' => 'UK')->orderBy('Name')->get();
 */
/*
Route::get('/', function()
{
    $users = DB::table('employees')->select('FirstName', 'Country')->get();
    echo "<pre>";
    var_dump($users);
    echo "</pre>";
}); */

Route::get('/', function()
{
    $users = DB::table('user')->get();
    return View::make('home.index')->with('users', $users);
});

/*
 * Using query builder :
 * DB::table('test')->insert(array('fname' => $fname, 'lname' = $lname));
 */
Route::post('/', function()
{
    $input = Input::all();
    $rules = array(
        'username' => 'required',
        'password' => 'required',
        'email' => 'required',
    );

    $messages = array(
        'username.required' => 'User name is required',
        'password.required' => 'Password is required',
        'email.required' => 'Email is required',
    );

    $v = Validator::make($input, $rules, $messages);

    if ($v->passes()) {
        DB::insert('INSERT INTO user (username, password, email) VALUES(?,?,?)',
            array($input['username'], md5($input['password']), $input['email'])
        );
        return Redirect::to('/');
    }
    return Redirect::to('create')->withInput()->withErrors($v)->with('message');
});

Route::get('about', function()
{
    return "This is about us";
});

Route::get('create', function()
{
    return View::make('home.create');
});

