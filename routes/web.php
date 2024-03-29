<?php

use App\Ichidai\Admin\AdminController;
use App\Ichidai\Attendance\AttendancesController;
use App\Ichidai\Coach\CoachesController;
use App\Ichidai\Frontend\HomeController;
use App\Ichidai\Grade\GradesController;
use App\Ichidai\Leads\LeadsController;
use App\Ichidai\Lesson\LessonsController;
use App\Ichidai\LessonTime\LessonTimesController;
use App\Ichidai\Member\MemberController;
use App\Ichidai\Setting\Helpers\Modules;
use App\Ichidai\Setting\IntroController;
use App\Ichidai\Setting\GeneralInfoController;

Auth::routes([
    'register' => false,
    'verify' => false,
]);

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('/leads', [LeadsController::class, 'submitForm'])->name('leads');

Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');

        Route::get('/settings/intro', [IntroController::class, 'edit'])->name('admin.introduction.edit');
        Route::post('/settings/intro', [IntroController::class, 'update'])->name('admin.introduction.update');

        Route::get('/settings/algemene-info', [GeneralInfoController::class, 'edit'])->name('admin.general_info.edit');
        Route::post('/settings/algemene info', [GeneralInfoController::class, 'update'])->name('admin.general_info.update');

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
            Route::get('/open/{lesson}', [LessonsController::class, 'open'])->name('admin.lessons.open');
        });

        Route::prefix('lesson-times')->group(function () {
            Route::get('/', [LessonTimesController::class, 'index'])->name('admin.lesson_times.index');
            Route::get('/create', [LessonTimesController::class, 'create'])->name('admin.lesson_times.create');
            Route::post('/create', [LessonTimesController::class, 'write'])->name('admin.lesson_times.write');
            Route::get('/edit/{lessonTime}', [LessonTimesController::class, 'edit'])->name('admin.lesson_times.edit');
            Route::post('/edit/{lessonTime}', [LessonTimesController::class, 'update'])->name('admin.lesson_times.update');
            Route::get('/delete/{lessonTime}', [LessonTimesController::class, 'delete'])->name('admin.lesson_times.delete');
        });

            Route::prefix('grades')->group(function () {
                Route::get('/', [GradesController::class, 'index'])->name('admin.grades.index');
                Route::get('/create', [GradesController::class, 'create'])->name('admin.grades.create');
                Route::post('/create', [GradesController::class, 'write'])->name('admin.grades.write');
                Route::get('/edit/{grade}', [GradesController::class, 'edit'])->name('admin.grades.edit');
                Route::post('/edit/{grade}', [GradesController::class, 'update'])->name('admin.grades.update');
                Route::get('/delete/{grade}', [GradesController::class, 'delete'])->name('admin.grades.delete');
                Route::get('/sort-up/{grade}', [GradesController::class, 'sortUp'])->name('admin.grades.sort_up');
                Route::get('/sort-down/{grade}', [GradesController::class, 'sortDown'])->name('admin.grades.sort_down');
            });

        if (Modules::membersEnabled()) {
            Route::prefix('members')->group(function () {
                Route::get('/', [MemberController::class, 'index'])->name('admin.members.index');
                Route::get('/create', [MemberController::class, 'create'])->name('admin.members.create');
                Route::post('/create', [MemberController::class, 'write'])->name('admin.members.write');
                Route::get('/edit/{member}', [MemberController::class, 'edit'])->name('admin.members.edit');
                Route::post('/edit/{member}', [MemberController::class, 'update'])->name('admin.members.update');
                Route::get('/delete/{member}', [MemberController::class, 'delete'])->name('admin.members.delete');
                Route::get('/{member}', [MemberController::class, 'view'])->name('admin.members.view');
            });

            Route::prefix('attendance')->group(function () {
                Route::get('/register/{user}/', function() {})->name('admin.attendance.register.husk');
                Route::get('/register/{user}/{lesson}', [AttendancesController::class, 'write'])->name('admin.attendance.register');
            });
        }

    });
});

Route::group(['middleware' => ['auth']], function() {
    Route::prefix('lid')->group(function() {
        Route::get('/', [MemberController::class, 'memberIndex'])->name('member.index');
    });
});
