<?php

use Illuminate\Support\Facades\Route;


Route::get('admin/users/login',[\App\Http\Controllers\Admin\Users\LoginController::class,'index']);
Route::post('admin/users/login/store',[\App\Http\Controllers\Admin\Users\LoginController::class,'store']);



Route::get('/', [\App\Http\Controllers\Admin\Users\MainController::class, 'index']);
Route::get('/list-product', [\App\Http\Controllers\Admin\Users\MainController::class, 'index  ']);

Route::prefix('/categories')->group(function (){
//Route read
    Route::get('/', [\App\Http\Controllers\CategoryController::class,'index'])->name('categories.index');
//Route hiển thị form thêm brand
    Route::get('/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
//Route thêm dl lên db
    Route::post('/create', [\App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
//Route hiển thị form sửa
    Route::get('/{category}/edit', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
//Route update Dl trên db
    Route::put('/{category}/edit', [\App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
// Route để xóa
    Route::delete('/{category}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');
});
