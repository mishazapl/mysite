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


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {

    /**
     * Роуты по страница админ-панели.
     */

    Route::get('/', 'AdminPanel\MainAdminPageController@index');

    Route::get('/profile/{id}', 'AdminPanel\ProfileController@index');

    Route::get('/edit/sites', 'AdminPanel\EditPageController@index');

    /**
     * Раздел команда.
     */

    Route::group(['prefix' => 'team'], function () {

        /**
         * Страница команды
         */

        Route::get('/', 'AdminPanel\Team\TeamPageController@index');

        /**
         * Удаление/Изменение данных
         */

        Route::get('/edit/{id}', 'AdminPanel\Team\UpdateDeleteController@edit');
        Route::post('/edit/{id}', 'AdminPanel\Team\UpdateDeleteController@store');
        Route::get('/delete/{id}', 'AdminPanel\Team\UpdateDeleteController@delete');

        /**
         * Добавить человека в команду.
         */

        Route::get('/add/', 'AdminPanel\Team\AddController@index');
        Route::post('/add/', 'AdminPanel\Team\AddController@store');

    });

    /**
     * Раздел редактирования слайдера
     */

    Route::group(['prefix' => 'slider'], function () {

        Route::get('/', 'AdminPanel\Slider\SliderPageController@index');

    });

});


Route::get('/', 'MainPageController@index');