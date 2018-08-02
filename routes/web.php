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
    return view('home')->with("name","Sanjee");
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/news/{channelname}', 'GetData@selectChannel');

Route::get('/getRequest',function(){
  if(Request::ajax()){
      
    //   echo "<h1>Hi Welcome. Ajax Successfully</h1>";
      return view('more-news');
  }});

Route::get('/search-live/{Value}','GetData@SearchString');
// Route::get('/search-live/{Value}',function($Value){
//     if(Request::ajax()){
//         //   echo "<h1>Hi Welcome. Ajax Successfully</h1>";
//         return $Value;
// }});