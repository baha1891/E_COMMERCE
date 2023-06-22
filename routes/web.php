<?php

use App\DataTables\AdminDataTable;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\BlogsCategoryController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Models\Admin;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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



Route::get('/',[AdminController::class,'index']);



Route::group(['prefix' => LaravelLocalization::setLocale()],function(){
Route::group(['prefix' => 'admin', 'as' => 'admin.'],function(){


    Route::get('/login',[AuthAdminController::class,'loginPage'])->name('loginpage');
    Route::post('/login',[AuthAdminController::class,'login'])->name('login');
    Route::get('/index',[AdminController::class,'index'])->name('index');
    Route::get('/create',[AdminController::class,'create'])->name('create');
    Route::post('/store', [AdminController::class,'store'])->name('store');
    Route::get('/edit/{id}',[AdminController::class,'edit'])->name('edit');
    Route::put('/update',[AdminController::class,'update'])->name('update');
    Route::get('/delete',[AdminController::class,'delete'])->name('delete');

    Route::group(['prefix' => 'blogsCategory', 'as' => 'blogsCategory.'],function(){

        Route::get('/index',[BlogsCategoryController::class,'index'])->name('index');
        Route::get('/create',[BlogsCategoryController::class,'create'])->name('create');
        Route::post('/store', [BlogsCategoryController::class,'store'])->name('store');
        Route::get('/edit/{id}',[BlogsCategoryController::class,'edit'])->name('edit');
        Route::put('/update',[BlogsCategoryController::class,'update'])->name('update');
        Route::get('/delete',[BlogsCategoryController::class,'delete'])->name('delete');

    });

    Route::group(['prefix' => 'role', 'as' => 'role.'],function(){

        Route::get('/index',[RoleController::class,'index'])->name('index');
        Route::get('/create',[RoleController::class,'create'])->name('create');
        Route::post('/store', [RoleController::class,'store'])->name('store');
        Route::get('/edit/{id}',[RoleController::class,'edit'])->name('edit');
        Route::put('/update',[RoleController::class,'update'])->name('update');
        Route::get('/delete',[RoleController::class,'delete'])->name('delete');

    });

    Route::group(['prefix' => 'permission', 'as' => 'permission.'],function(){

        Route::get('/index',[PermissionController::class,'index'])->name('index');
        Route::get('/create',[PermissionController::class,'create'])->name('create');
        Route::post('/store', [PermissionController::class,'store'])->name('store');
        Route::get('/edit/{id}',[PermissionController::class,'edit'])->name('edit');
        Route::put('/update',[PermissionController::class,'update'])->name('update');
        Route::get('/delete',[PermissionController::class,'delete'])->name('delete');

    });

});
});
