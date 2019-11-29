<?php


Route::get('/', function () {
    return redirect(app()->getLocale());
});


Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setlocale'
    ], function(){

    Route::get('/', 'HomeController@index')->name('home');

    Auth::routes();
    Route::get('/register-person', 'Auth\RegisterController@showPersonRegistrationForm')->name('register-person');
    Route::get('/register-organization', 'Auth\RegisterController@showOrganizationRegistrationForm')->name('register-organization');



    Route::group(
        [
            'prefix' => 'cabinet-person',
            'as' => 'cabinet.person.',
            'namespace' => 'Cabinet\Person',
            'middleware' => ['auth', 'can:cabinet-person'],
        ],
        function () {
            Route::get('/', 'HomeController@index')->name('home');

            Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
                Route::get('/', 'ProfileController@index')->name('home');
                Route::put('/update', 'ProfileController@update')->name('update');
                Route::delete('/delete-image', 'ProfileController@deleteImage')->name('delete-image');
                Route::get('/change-password', 'ProfileController@changePasswordShowForm')->name('change-password');
                Route::put('/change-password', 'ProfileController@changePassword')->name('update-password');

            });

            Route::get('favorites', 'FavoriteController@index')->name('favorites.index');
            Route::delete('favorites/{advert}', 'FavoriteController@remove')->name('favorites.remove');

        }
    );


    Route::group(
        [
            'prefix' => 'cabinet-organization',
            'as' => 'cabinet.organization.',
            'namespace' => 'Cabinet\Organization',
            'middleware' => ['auth', 'can:cabinet-organization'],
        ],
        function () {
            Route::get('/', 'HomeController@index')->name('home');

            Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
                Route::get('/', 'ProfileController@index')->name('home');
                Route::get('/edit', 'ProfileController@edit')->name('edit');
                Route::put('/update', 'ProfileController@update')->name('update');
            });
        }
    );


});

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
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
            Route::resource('attributes', 'AttributeController')->except('index');
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

