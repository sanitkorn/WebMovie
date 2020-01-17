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
/* webpage */
Route::get('/', function () {
    return view('welcome');
});
Route::resource('crud','CrudsController');
Route::get('/khmerdubbed','CrudsController@khmerdubbed');
Route::get('/animate','CrudsController@animate');
Route::get('/chinesedrama','CrudsController@chinesedrama');
Route::get('/koreandrama','CrudsController@koreandrama');
Route::get('/thaidrama','CrudsController@thaidrama');
Route::get('/animation','CrudsController@animation');

Route::get('/display','CrudsController@homepage');
Route::get('/displa','CrudsController@chinese');
Route::get('/displ','CrudsController@korean');
Route::get('/disp','CrudsController@thai');
Route::get('/dis','CrudsController@anime');
Route::get('/website',function(){
    return view('homepage');
});

/* Drama */
Route::get('/website/chinede_drama',function(){
    return view('chinese');
});
Route::get('/website/korean_drama',function(){
    return view('korean');
});
Route::get('/website/thai_drama',function(){
    return view('thai');
});
Route::get('/website/drama',function(){
    return view('homepage');
});



/* genres */
Route::get('/website/action',function(){
    return view('action');
});
Route::get('/website/biography',function(){
    return view('biography');    
});
Route::get('/website/adventute',function(){
    return view('adventute');    
});
Route::get('/website/comedy',function(){
    return view('comedy');    
});

/*Anime */
Route::get('/website/anime',function(){
    return view('anime');    
});

/* Wacth */

Route::get('/website/watching',function(){
    return view('watching');    
});

