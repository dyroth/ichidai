<?php

Auth::routes([
    'register' => false,
    'verify' => false,
]);

Route::get('/', 'Frontend\HomeController@index')->name('index');

Route::group(['middleware' => ['auth']], function() {
    Route::prefix('admin')->group(function () {
        Route::get('/', 'Backend\AdminController@index')->name('admin.index');

        Route::get('/coaches', 'Backend\CoachesController@index')->name('admin.coaches.index');
        Route::get('/coaches/create', 'Backend\CoachesController@create')->name('admin.coaches.create');
        Route::post('/coaches/create', 'Backend\CoachesController@write')->name('admin.coaches.write');
        Route::get('/coaches/edit/{coach}', 'Backend\CoachesController@edit')->name('admin.coaches.edit');
        Route::post('/coaches/edit/{coach}', 'Backend\CoachesController@update')->name('admin.coaches.update');
        Route::get('/coaches/delete/{coach}', 'Backend\CoachesController@delete')->name('admin.coaches.delete');

        Route::get('/lessons', 'Backend\LessonsController@index')->name('admin.lessons.index');
    });
});
