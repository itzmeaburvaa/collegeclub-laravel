<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\RegistrationController;
use App\Models\Admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home page - dynamic clubs list
Route::get('/', [ClubController::class, 'index']);
Route::post('/clubs', [ClubController::class, 'store'])->name('clubs.store');

// Admin check (Note: not secure – use hashing in real apps)
Route::post('/check-admin', function (Request $request) {
    $admin = Admin::where('username', $request->username)
                  ->where('password', $request->password)
                  ->first();

    return response()->json(['success' => $admin ? true : false]);
});



// Enrollment routes (keep only controller version)
Route::get('/enroll', [RegistrationController::class, 'create'])->name('register.form');
Route::post('/enroll', [RegistrationController::class, 'store'])->name('register.submit');

// Static route for IoT club page
Route::get('/iot', function () {
    return view('iot');
});

use App\Http\Controllers\StudentController;



Route::get('/students', [StudentController::class, 'show'])->name('students.list');
Route::get('/students/accept/{id}', [StudentController::class, 'accept'])->name('students.accept');
Route::get('/students/reject/{id}', [StudentController::class, 'reject'])->name('students.reject');
Route::post('/students/accept/{id}/{club}', [StudentController::class, 'acceptClub'])->name('students.acceptClub');
Route::post('/students/reject/{id}/{club}', [StudentController::class, 'rejectClub'])->name('students.rejectClub');