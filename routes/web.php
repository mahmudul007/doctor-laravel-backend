<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\patientController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\doctorController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('patient/list',[patientController::class,'patientList'])->middleware('LoggedinUser')->name('patientList');
Route::get('patient/prescribed',[patientController::class,'prescribed'])->middleware('LoggedinUser')->name('prescribed');

//booking controal

Route::get('/patient/edit/{id}',[bookingController::class,'edit']);
Route::post('/patient/edit',[bookingController::class,'editSubmit'])->name('patient.edit');
//doctor panel

Route::get('/doctor/doctor',[doctorController::class,'doctorLogin'])->name('doctorLogin');
Route::post('/doctor/doctor',[doctorController::class,'loginSubmit'])->name('loginSubmit');
Route::get('/doctor/profile',[doctorController::class,'myprofile'])->name('myprofile');

Route::get('/doctor/editdoc/{id}',[doctorController::class,'editProfile'])->name('editProfile');
Route::post('/doctor/editdoc',[doctorController::class,'editSubmit'])->name('editSubmit');

//log out

Route::get('/logout',[doctorController::class,'doctorLogout'])->name('doctorLogout');
