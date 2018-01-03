<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::middleware('auth')->group(function () {
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index')->name("home");
    /*
     * Book R0ute
     */
    Route::get('/rent_book', 'BookController@index')->name("book.index");
});
Route::get("/login","AuthController@login_index")->name("login");
Route::get("/logout", function (){
    \Illuminate\Support\Facades\Auth::logout();
    return redirect()->route("login");
})->name("logout");
Route::post("/login","AuthController@login")->name("login.post");
#Route::get("/register","AuthController@register_index")->name("register");