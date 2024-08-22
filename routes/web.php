<?php

use App\Http\Controllers\CenterController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MainDepartmentController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\SubDepartmentController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Uaser admin route
Route::get('/', function () {
    return view('User.userlogin');
})->name('login');
Route::post('/adminlogin', [UserController::class, 'Adminlogin'])->name('adminlogin');
Route::get('/user', [UserController::class, 'user'])->name('user');
Route::post('/userRegister', [UserController::class,'userRegister'])->name('userRegister');


// Patient resorce route
Route::resource('patient', PatientController::class);
Route::get('/addpatienttest', [PatientController::class,'PatientTest'])->name('patienttest');


//Departmen route
Route::resource('department', MainDepartmentController::class);
Route::resource('subdept', SubDepartmentController::class);

// Doctor refrence rout


// Test route

Route::resource('test', TestController::class);

Route::get('/doc_ref_tab', [DoctorController::class,'doctable'])->name('doctor');
Route::post('/adddoctore', [DoctorController::class,'adddoctor'])->name('adddoctor');
Route::get('/center_ref', [CenterController::class,'center'])->name('center');
Route::Post('/addcenter', [CenterController::class,'addcenter'])->name('addcenter');
