<?php

use App\Ichidai\Admin\AdminController;
use App\Ichidai\Coaches\CoachesController;
use App\Ichidai\Frontend\HomeController;
use App\Ichidai\Lesson\LessonsController;
use App\Ichidai\LessonTime\LessonTimesController;
use App\Ichidai\Settings\IntroController;

Auth::routes([
    'register' => false,
    'verify' => false,
]);

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::group(['middleware' => ['auth']], function() {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');

        Route::get('/settings/intro', [IntroController::class, 'edit'])->name('admin.introduction.edit');
        Route::post('/settings/intro', [IntroController::class, 'update'])->name('admin.introduction.update');

        Route::prefix('coaches')->group(function () {
            Route::get('/', [CoachesController::class, 'index'])->name('admin.coaches.index');
            Route::get('/create', [CoachesController::class, 'create'])->name('admin.coaches.create');
            Route::post('/create', [CoachesController::class, 'write'])->name('admin.coaches.write');
            Route::get('/edit/{coach}', [CoachesController::class, 'edit'])->name('admin.coaches.edit');
            Route::post('/edit/{coach}', [CoachesController::class, 'update'])->name('admin.coaches.update');
            Route::get('/delete/{coach}', [CoachesController::class, 'delete'])->name('admin.coaches.delete');
        });

        Route::prefix('lessons')->group(function () {
            Route::get('/', [LessonsController::class, 'index'])->name('admin.lessons.index');
            Route::get('/create', [LessonsController::class, 'create'])->name('admin.lessons.create');
            Route::post('/create', [LessonsController::class, 'write'])->name('admin.lessons.write');
            Route::get('/edit/{lesson}', [LessonsController::class, 'edit'])->name('admin.lessons.edit');
            Route::post('/edit/{lesson}', [LessonsController::class, 'update'])->name('admin.lessons.update');
            Route::get('/delete/{lesson}', [LessonsController::class, 'delete'])->name('admin.lessons.delete');
        });

        Route::prefix('lesson-times')->group(function () {
            Route::get('/', [LessonTimesController::class, 'index'])->name('admin.lesson_times.index');
            Route::get('/create', [LessonTimesController::class, 'create'])->name('admin.lesson_times.create');
            Route::post('/create', [LessonTimesController::class, 'write'])->name('admin.lesson_times.write');
            Route::get('/edit/{lessonTime}', [LessonTimesController::class, 'edit'])->name('admin.lesson_times.edit');
            Route::post('/edit/{lessonTime}', [LessonTimesController::class, 'update'])->name('admin.lesson_times.update');
            Route::get('/delete/{lessonTime}', [LessonTimesController::class, 'delete'])->name('admin.lesson_times.delete');
        });
    });
});
