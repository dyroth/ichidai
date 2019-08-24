<?php
Auth::routes();

Route::get('/', 'HomeController@index')->name('index');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/admin', 'AdminController@index')->name('admin.index');
});

