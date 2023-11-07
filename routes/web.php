<?php
// import path
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;


// get
// หน้าเริ่มต้นกอ่นlogin
Route::get('/', [AdminController::class,'home'])->name('home');
// หน้าเริ่มต้นหลังlogin
Route::get('/index', [AdminController::class,'index'])->name('index');
// เพิ่มข้อมูล
Route::get('insert',[AdminController::class,'insert'])->name('insert');
// ลบข้อมูล
Route::get('delete/{id}',[AdminController::class,'delete'])->name('delete');
// แก้ไข
Route::get('edit/{id}',[AdminController::class,'edit'])->name('edit');
// หน้าlogin
Route::get('/login', [AdminController::class,'login'])->name('login');
// หน้าlogout
Route::get('/logout', [AdminController::class,'logout'])->name('logout');

// post
// เพิ่มข้อมูล
Route::post('insertt',[AdminController::class,'insertt'])->name('insertt');
// แก้ไขข้อมูล
Route::post('update/{id}',[AdminController::class,'update'])->name('update');
// เช็คความถูกต้อง
Route::post('login', [AuthController::class, 'login'])->name('login');

// errorไม่พบข้อมูล
// เมื่อไม่พบข้อมูล
Route::fallback(function () {
    return redirect()->route('home');
});