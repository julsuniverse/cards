<?php

Route::get('/', 'PageController@index')->name('index');

Route::get('/order', 'OrderController@index')->name('order.index');
Route::get('/order/custom', 'OrderController@textOrder')->name('order.text-order');
Route::get('/order/select', 'OrderController@selectOrder')->name('order.select-order');
