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
Route::resource('admin', 'ArticleController');
 Route::resource('admins', 'SilowniaController');
Auth::routes();
 
Route::get('/sw-harmonogram', 'ArticleController@publicHomePage');
Route::get('/silownia-harmonogram', 'SilowniaController@publicHomePage');


Route::get('/index', function () {
    return view('pages.index');
});

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/sportywalki', function () {
    return view('pages.sporty-walki-home');
});

 Route::get('/sw-cennik', function () {
    return view('pages.sporty-walki-cennik');
});

// Route::get('/sw-harmonogram', function () {
//    return view('pages.sporty-walki-harmonogram');
//});

 Route::get('/sw-aktualnosci', function () {
    return view('pages.sporty-walki-aktualnosci');
});

 Route::get('/sw-klub', function () {
    return view('pages.sporty-walki-klub');
});

 Route::get('/sw-multimedia', function () {
    return view('pages.sporty-walki-multimedia');
});
 Route::get('/sw-sponsorzy', function () {
    return view('pages.sporty-walki-sponsorzy');
});
 Route::get('/sw-kontakt', function () {
    return view('pages.sporty-walki-kontakt');
});
 
 Route::get('/silownia', function () {
    return view('pages.silownia-home');
});

  Route::get('/silownia-cennik', function () {
    return view('pages.silownia-cennik');
});



 
  Route::get('/silownia-aktualnosci', function () {
    return view('pages.silownia-aktualnosci');
});
 
  Route::get('/silownia-trenerzy', function () {
    return view('pages.silownia-trenerzy');
});
 
  Route::get('/silownia-multimedia', function () {
    return view('pages.silownia-multimedia');
});
  Route::get('/silownia-sponsorzy', function () {
    return view('pages.silownia-sponsorzy');
});

  Route::get('/silownia-kontakt', function () {
    return view('pages.silownia-kontakt');
});

 