<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;



Route::get('/',[HomeController::class,'index']); 

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),
    'verified',])->group(function () {Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[HomeController::class,'redirect']);
Route::get('/about', [HomeController::class, 'showAboutPage'])->name('about.page');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/view_catagory',[AdminController::class,'view_catagory']);

//Route::get('/service',[AeController::class,'showServicePage']); 

Route::get('/servicepage', [HomeController::class, 'showServicepage'])->name('service.page');


Route::get('/view_service',[AdminController::class,'view_service']);

Route::post('/add_service',[AdminController::class,'add_service']);

Route::get('/show_service',[AdminController::class,'show_service']);

Route::get('/show_company',[AdminController::class,'show_company']);

Route::get('/delete_service/{id}',[AdminController::class,'delete_service']);

Route::get('/update_service/{id}', [AdminController::class, 'update_service']);

Route::post('/update_service_confirm/{id}',[AdminController::class,'update_service_confirm']);

Route::get('/service_details/{id}',[HomeController::class,'service_details']);

Route::post('appointment_dts/{id}',[HomeController::class,'appointment_dts']);


Route::get('/company_register', [HomeController::class, 'company_register'])->name('company_register');




Route::post('/add_company',[HomeController::class,'add_company']);






