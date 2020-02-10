<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
get
post
delete path put
*/
Route::get('test/{id?}/{usernmae?}', function ($id = null, $username = null) {

    return 'hello to my site id=>' . $id . '   and username =>' . $username;
})->where('id', '[0-9A-Za-z]+');

Route::get('users/{id}/{name}', function ($id, $name) {
    return 'hello to my site id=>' . $id . '   and name is =>' . $name;
})->where(['id' => '[0-9]+',  'name' => '[A-Za-z]+']);














Route::resource('stud', 'StudentController');
Route::get('/t', 'NewsController@test');
