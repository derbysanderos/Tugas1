<?php

use App\Http\Controllers\ContentController;
use App\Models\Biodata;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ContentController::class,'input']);
Route::post('/store', [ContentController::class,'store']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "dashboard"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Maritza Fiastamare Salvezza",
        "email" => "maritzafs23@student.ub.ac.id",
        "image" => "me.jpeg"
    ]);
});
