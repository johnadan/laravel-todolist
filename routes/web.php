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

// Route::get('/hello', function () {
// 	return "<h1>Hello World!</h1>";
// });
	

// Route::get('/sample', function () {
//     return view('sample',
//     	[
//     	'name'=>'juan',
//     	'middlename'=>'dela',
//     	'surname'=>'cruz'
//     	]);
// });

// Route::get('/sample', function () {
//     $fullname = [
//     	'name'=>'juan',
//     	'middlename'=>'dela',
//     	'surname'=>'cruz'
//     	];
// return view('sample')->with('fullname', $fullname);
// });

// Route::get('/sample', function () {
//     $fullname = [
//     	'name'=>'juan',
//     	'middlename'=>'dela',
//     	'lastname'=>'cruz'
//     	];
//     	$helloworld = "helloworld";
// return view('sample', compact('fullname', 'helloworld'));
// });

// Route::get('/sample', function () {
//     $fullname = [
//     	'name'=>'juan',
//     	'middlename'=>'dela',
//     	'lastname'=>'cruz'
//     	];
//     	$helloworld = "helloworld";
// return view('sample')->with('fullname', $fullname);
// return view('sample', compact('fullname', 'helloworld'));
// });

//greetPerson
//Route::get('/sample', "SampleController@greetPerson");
//NameofFruits
//Route::get('/fruits', "SampleController@nameofFruits");

Route::get('/tasklist', "TaskController@showTask");

Route::post('/newtask', "TaskController@addTask");

Route::delete('/taskdelete/{id}', "TaskController@deleteTask");

Route::put('/taskupdate/{id}', "TaskController@updateTask");

// Route::post('/taskdelete', "TaskController@deleteTask");