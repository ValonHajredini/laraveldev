<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::match(['get','post'], 'hello', function(){
//    return 'This cold be a ger or a post';
//});
Route::any( '/hello/{message}', function($message ){
    return 'Hello '. $message ;
})-> where('message','[A_Za-z]+');
/*
Route::get('/hello', function(){
    return "Hello world.";
});
Route::post('/hello', function(){
    return "Post hello From post";
});
Route::put('hello', function(){
    return "This is the put rout";
});
Route::delete('hello', function(){
    return "This is the delete rout";
});
*/
Route::get('/dashboard', ['middleware'=> 'age', function(){
    return 'This is the dashboard';
}]);
Route::get('/restricted', function(){
    return 'Uou ar not Aloved here';
});
//Route::get('/tasks','Task2Controller@show');
//
Route::get('/task/create', 'Task2Controller@create');
Route::get('task/{id}', 'Task2Controller@show');
Route::controller('tasks','Task2Controller');
Route::resource('task', 'Task2Controller');

//Auth routesh
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@logout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



