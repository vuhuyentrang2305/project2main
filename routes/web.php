<?php

use Illuminate\Support\Facades\Route;

Route::get('admin/users/login',[\App\Http\Controllers\Admin\Users\LoginController::class,'index']);


