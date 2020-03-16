<?php

Auth::routes([
    'register' => false,
    'verify' => false,
]);

Route::get('/', 'Frontend\HomeController@index')->name('index');

Route::group(['middleware' => ['auth']], function() {
    Route::prefix('admin')->group(function () {
        Route::get('/', 'Backend\AdminController@index')->name('admin.index');
        Route::get('/coaches', 'Backend\CoachesController@index')->name('admin.coaches');

        Route::get('/lessons', 'Backend\LessonsController@index')->name('admin.lessons');
    });
});
