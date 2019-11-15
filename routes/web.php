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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(
    [
        'prefix' =>  'admin',
        'as' => 'admin.',
        'namespace' => 'Admin',
//        'middleware' => ['auth', 'can:admin-panel'],
        'middleware' => ['auth'],
    ],
    function (){
        Route::get('/', 'HomeController@index')->name('home');
        Route::resource('categories', 'CategoryController');

        Route::group(['prefix' => 'categories/{category}', 'as' => 'categories.'], function () {
            Route::post('/first', 'CategoryController@first')->name('first');
            Route::post('/up', 'CategoryController@up')->name('up');
            Route::post('/down', 'CategoryController@down')->name('down');
            Route::post('/last', 'CategoryController@last')->name('last');
            Route::get('/delete-photo', 'CategoryController@deletePhoto')->name('delete-photo');
        });


    }
);
