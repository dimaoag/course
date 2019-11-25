<?php


Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');


Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setlocale'

    ], function(){

    Route::get('/', 'HomeController@index')->name('home');

    Auth::routes();

    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::get('/verify/{token}', 'Auth\RegisterController@verify')->name('verify');

});


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









//Переключение языков
Route::get('setlocale/{lang}', function ($lang) {

    $referer = Redirect::back()->getTargetUrl(); //URL предыдущей страницы
    $parse_url = parse_url($referer, PHP_URL_PATH); //URI предыдущей страницы

    //разбиваем на массив по разделителю
    $segments = explode('/', $parse_url);

    //Если URL (где нажали на переключение языка) содержал корректную метку языка
    if (in_array($segments[1], App\Http\Middleware\LocaleMiddleware::$languages)) {

        unset($segments[1]); //удаляем метку
    }

    //Добавляем метку языка в URL (если выбран не язык по-умолчанию)
    if ($lang != App\Http\Middleware\LocaleMiddleware::$mainLanguage){
        array_splice($segments, 1, 0, $lang);
    }

    //формируем полный URL
    $url = Request::root().implode("/", $segments);

    //если были еще GET-параметры - добавляем их
    if(parse_url($referer, PHP_URL_QUERY)){
        $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
    }
    return redirect($url); //Перенаправляем назад на ту же страницу

})->name('setlocale');
