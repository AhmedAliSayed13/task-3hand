<?php



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



Route::middleware(['isUser'])->group(function () {
    Route::get('user/dashboard', [App\Http\Controllers\user\UserController::class, 'dashboard'])->name('user.dashboard');
    Route::POST('user/add-comment', [App\Http\Controllers\user\UserController::class, 'AddComment'])->name('user.AddComment');
});