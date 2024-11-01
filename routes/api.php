<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StatController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AttendanceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
 
});   

Route::get('/teachers', [TeacherController::class, 'index']);
Route::post('/teachers', [TeacherController::class, 'store']);
Route::delete('/teachers/{id}', [TeacherController::class, 'destroy']);
Route::get('/teachers/{id}', [TeacherController::class, 'show']);
Route::post('/teachers/{id}', [TeacherController::class, 'update']);


        Route::get('/stats', [StatController::class, 'index']);
        Route::post('/stats', [StatController::class, 'store']);
        Route::delete('/stats/{id}', [StatController::class, 'destroy']);
        Route::get('/stats/{id}', [StatController::class, 'show']);
        Route::post('/stats/{id}', [StatController::class, 'update']);
   
 
Route::get('/students', [studentController::class, 'index']);
Route::post('/students', [studentController::class, 'store']);
Route::delete('/students/{id}', [studentController::class, 'destroy']);
Route::get('/students/{id}', [studentController::class, 'show']);
Route::post('/students/{id}', [studentController::class, 'update']);


        Route::get('courses', [CourseController::class, 'index']);
        Route::post('courses', [CourseController::class, 'store']);
        Route::delete('courses/{id}', [CourseController::class, 'destroy']);
        Route::get('courses/{id}', [CourseController::class, 'show']);
        Route::post('courses/{id}', [CourseController::class, 'update']);


Route::get('attendances', [AttendanceController::class, 'index']);
Route::post('attendances', [AttendanceController::class, 'store']);
Route::delete('attendances/{id}', [AttendanceController::class, 'destroy']);
Route::get('attendances/{id}', [AttendanceController::class, 'show']);
Route::post('attendances/{id}', [AttendanceController::class, 'update']);