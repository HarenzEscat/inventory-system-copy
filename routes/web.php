<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[StudentController::class, 'index'])->name('home');
Route::post('/save-students',[studentController::class, 'save_students'])->name('savestudents');
Route::get('/delete-students/{id}', [studentController::class, 'delete_students'])->name('removestudents');
Route::get('/update-students/{id}', [studentController::class, 'update_students'])->name('updatestudents');
Route::post('/save-updated-students', [studentController::class, 'save_updated_students'])->name('saveUpdatedstudents');
