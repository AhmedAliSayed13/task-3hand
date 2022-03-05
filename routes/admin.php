<?php


use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\ArticleController;
use App\Http\Controllers\admin\CategoryController;
/*

|--------------------------------------------------------------------------

| User Routes

|--------------------------------------------------------------------------

|

| Here is where you can register user routes for your application. These

| routes are loaded by the RouteServiceProvider within a group which

| contains the "user" middleware group. Now create something great!

|

*/




Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin']], function(){
    Route::get('dashboard', [adminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('article', ArticleController::class);
    Route::resource('category', CategoryController::class);

});
