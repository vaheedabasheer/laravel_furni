<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontendcontroller;
Route::get('/',[Frontendcontroller::class,'home'])->name('home');
Route::get('/login',[Frontendcontroller::class,'login'])->name('login');
Route::get('/logout',[Frontendcontroller::class,'logout'])->name('logout');
Route::get('/register',[FrontendController::class,'register'])->name('register');
Route::post('/save',[FrontendController::class,'save'])->name('save');
Route::post('/dologin',[FrontendController::class,'dologin'])->name('do.login');
Route::get('/admin',[FrontendController::class,'admin'])->name('admin');
Route::get('/staff',[FrontendController::class,'staff'])->name('staff');
Route::get('/customer',[FrontendController::class,'customer'])->name('customer');
Route::get('/admin/viewRegistration',[FrontendController::class,'viewReg'])->name('admin.viewReg');
