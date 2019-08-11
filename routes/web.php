<?php
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
    'prefix' => 'dashboard'
], function () {
    Route::get('/', 'Dashboard\DashboardController@index')->name('dashboard.index');
    Route::resource('layout', 'Dashboard\LayoutController')->except('show');
});

Auth::routes();