<?php
Route::get('/locale', 'LocaleController@index')->name('change-locale');

Route::get('/', 'PageController@index')->name('home');

Route::get('/order', 'OrderController@index')->name('order.index');
Route::get('/order/custom/{layout?}', 'OrderController@textOrder')->name('order.text-order');
Route::get('/order/select', 'OrderController@selectOrder')->name('order.select-order');
Route::put('/order/store', 'OrderController@store')->name('order.store');
Route::get('/order/success', 'OrderController@success')->name('order.success');

Route::group([
    'middleware' => 'auth',
    'prefix' => 'cabinet'
], function () {
    Route::get('/', 'User\CabinetController@index')->name('cabinet');
    Route::put('/{user}/edit', 'User\CabinetController@edit')->name('cabinet.edit');
    Route::put('/{user}/change-password', 'User\CabinetController@changePassword')->name('cabinet.password');
});

Route::group([
    'middleware' => ['auth','admin'],
    'prefix' => 'dashboard',
    'as' => 'dashboard.'
], function () {
    Route::get('/', 'Dashboard\DashboardController@index')->name('index');
    Route::resource('layout', 'Dashboard\LayoutController')->except('show');
    Route::resource('theme', 'Dashboard\ThemeController')->except('show');
    Route::get('/users', 'Dashboard\UserController@index')->name('user.index');
    Route::get('/order', 'Dashboard\OrderController@index')->name('order.index');
    Route::get('/order/{order}', 'Dashboard\OrderController@show')->name('order.show');
    Route::get('/order/{order}/edit', 'Dashboard\OrderController@edit')->name('order.edit');
    Route::put('/order/{order}/update', 'Dashboard\OrderController@update')->name('order.update');

    Route::get('/translation', 'Dashboard\TranslationController@index')->name('translation.index');
    Route::get('/translation/{translation}/edit', 'Dashboard\TranslationController@edit')->name('translation.edit');
    Route::put('/translation/{translation}/update', 'Dashboard\TranslationController@update')->name('translation.update');


    Route::group([
        'prefix' => 'images',
        'as' => 'images.'
    ], function () {
        Route::post('/store', 'Dashboard\ImageController@store')->name('store');
        Route::delete('/destroy', 'Dashboard\ImageController@destroy')->name('destroy');
    });});

Auth::routes();