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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/','MainpageController@home')->name('index');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/news/{channelname}', 'GetData@OpenNewsPage');

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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/abc', 'NewsController@GetNews');

 //Below Route for Search Results
 
 Route::get('/results', 'SearchController@searchFromDatabase');
//  Route::get('/results', function(){
//     $data=$_GET["searchbar"]; 
//     return view('searchresults')->with('data',$data);
//  });
 Route::post('/results', function(){
    $data=$_POST["searchbar"];
    return view('searchresults')->with('data',$data);
});
Route::get('/saveNews','UserLikeNewsController@saveUserLikeNewes')->name('saveNews');

Route::get('/UnlikeArticle','UserLikeNewsController@UnlikeArticle')->name('UnlikeArticle');
// Route::get('/saveNews', function(){
//   $ArticleId=$_GET['articleId'];
//   $userId=$_GET['userid'];
//   // echo "Hello $d";
//   return "hello Ajax $userId $ArticleId";
// })->name('saveNews');