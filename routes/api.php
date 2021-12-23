<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\patientController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\doctorController;
use App\Http\Controllers\loginApicontroller;
use App\Http\Controllers\doctorApiController;
use App\Http\Controllers\bookingApiController;
use App\Http\Controllers\reportApicontroller;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('patient/list',[patientController::class,'patientList'])->middleware('APIauth');
// Route::get('patient/prescribed',[patientController::class,'prescribed']);

Route::post('/login',[loginApicontroller::class,'login']);
Route::post('/logout',[loginApicontroller::class,'logout']);

//doctor 
Route::get('doctor/list',[doctorApiController::class,'doctor']);
Route::get('/doctor/profile',[doctorApiController::class,'DocProfile']);
// booking
Route::post('/patient/booking',[bookingApiController::class,'bookingSubmit']);

Route::get('/patient/patientList',[bookingApiController::class,'getBooked']);
Route::get('/patient/prescribe/{id}',[bookingApiController::class,'prescribe']);
Route::put('/patient/bookupdate/{id}',[bookingApiController::class,'bookupdate'])->middleware('APIauth');
Route::get('/patient/prescribed',[bookingApiController::class,'prescribed'])->middleware('APIauth');
//report 
Route::post('/report',[reportApicontroller::class,'report'])->middleware('APIauth');;

