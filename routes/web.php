<?php
// import path
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// หน้าเริ่มต้น
Route::get('/', [AdminController::class,'index'])->name('index');
// เพิ่มข้อมูล
Route::get('insert',[AdminController::class,'insert'])->name('insert');
// ลบข้อมูล
Route::get('delete/{id}',[AdminController::class,'delete'])->name('delete');
// แก้ไข
Route::get('edit/{id}',[AdminController::class,'edit'])->name('edit');
// เมื่อไม่พบข้อมูล
Route::fallback(function () {
    return view('index');
});
Route::post('insertt',[AdminController::class,'insertt'])->name('insertt');