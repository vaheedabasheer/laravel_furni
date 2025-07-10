<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontendcontroller;
use App\Http\Controllers\AdminController;
Route::get('/',[Frontendcontroller::class,'home'])->name('home');
Route::get('/login',[Frontendcontroller::class,'login'])->name('login');
Route::get('/logout',[Frontendcontroller::class,'logout'])->name('logout');
Route::get('/register',[FrontendController::class,'register'])->name('register');
Route::post('/save',[FrontendController::class,'save'])->name('save');
Route::post('/dologin',[FrontendController::class,'dologin'])->name('do.login');
Route::get('/admin',[FrontendController::class,'admin'])->name('admin');
Route::get('/staff',[FrontendController::class,'staff'])->name('staff');
Route::get('/customer',[FrontendController::class,'customer'])->name('customer');
Route::middleware('admin')->group(function(){
Route::get('/admin/viewRegistration',[FrontendController::class,'viewReg'])->name('admin.viewReg');
Route::get('/admin/logout',[AdminController::class,'adminLogout'])->name('admin.logout');
}
);
// Route::get('/admin/viewRegistration',[FrontendController::class,'viewReg'])->name('admin.viewReg')->middleware('admin');
// Route::get('/admin/logout',[AdminController::class,'adminLogout'])->name('admin.logout')->middleware('admin');
Route::get('/admin/delete/{rid}',[FrontendController::class,'delete'])->name('admin.delete');
Route::get('/staff/profile',[FrontendController::class,'staffProfile'])->name('staff.profile');
Route::get('/staff/fileCreate',[FrontendController::class,'fileCreate'])->name('staff.fileCreate');
Route::post('/staff/fileUpload',[FrontendController::class,'fileUpload'])->name('staff.fileUpload');
Route::get('/staff/viewMore',[FrontendController::class,'viewMore'])->name('staff.viewMore');
Route::get('/staff/viewMoreAdd',[FrontendController::class,'viewMoreAdd'])->name('staff.viewMoreAdd');
Route::get('/staff/viewMoreAdd',[FrontendController::class,'viewMoreAdd'])->name('staff.viewMoreAdd');
Route::get('/staff/viewMoreAdd',[FrontendController::class,'viewMoreAdd'])->name('staff.viewMoreAdd');
Route::get('/admin/registration',[AdminController::class,'adminReg'])->name('admin.registration');
Route::post('/admin/registration/save',[AdminController::class,'save'])->name('admin.save');
Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');
Route::post('/admin/dologin',[AdminController::class,'doAdminlogin'])->name('do.adminLogin');