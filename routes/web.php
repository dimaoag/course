<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::get('/verify/{token}', 'Auth\RegisterController@verify')->name('verify');


Route::group(
    [
        'prefix' =>  'admin',
        'as' => 'admin.',
        'namespace' => 'Admin',
        'middleware' => ['auth', 'can:admin-panel'],
    ],
    function (){
        Route::get('/', 'HomeController@index')->name('home');

        Route::resource('users', 'UsersController'); //crud
        Route::post('/users/{user}/verify', 'UsersController@verify')->name('users.verify');


        Route::resource('categories', 'CategoryController');
        Route::group(['prefix' => 'categories/{category}', 'as' => 'categories.'], function () {
            Route::get('/list', 'CategoryController@list')->name('list');
            Route::get('/create', 'CategoryController@create')->name('create');
            Route::get('/show', 'CategoryController@show')->name('show');
            Route::post('/first', 'CategoryController@first')->name('first');
            Route::post('/up', 'CategoryController@up')->name('up');
            Route::post('/down', 'CategoryController@down')->name('down');
            Route::post('/last', 'CategoryController@last')->name('last');
            Route::get('/delete-photo', 'CategoryController@deletePhoto')->name('delete-photo');
        });

        Route::resource('regions', 'RegionController');

        Route::group(['prefix' => 'publisher', 'as' => 'publisher.', 'namespace' => 'Publisher'], function () {

            Route::resource('categories', 'CategoryController');
            Route::group(['prefix' => 'categories/{category}', 'as' => 'categories.',], function () {
                Route::post('/first', 'CategoryController@first')->name('first');
                Route::post('/up', 'CategoryController@up')->name('up');
                Route::post('/down', 'CategoryController@down')->name('down');
                Route::post('/last', 'CategoryController@last')->name('last');
                Route::get('/delete-photo', 'CategoryController@deletePhoto')->name('delete-photo');
            });


        });





    }
);
