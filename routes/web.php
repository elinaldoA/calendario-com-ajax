<?php

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

Route::get('ckeditor', [App\Http\Controllers\FullCalendarController::class, 'index']);
Route::post('fullcalendar/create', [App\Http\Controllers\FullCalendarController::class, 'create']);
Route::post('fullcalendar/update', [App\Http\Controllers\FullCalendarController::class, 'update']);
Route::post('fullcalendar/destroy', [App\Http\Controllers\FullCalendarController::class, 'destroy']);
