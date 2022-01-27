<?php

use App\Http\Controllers\IkanController;
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


Route::get('add-ikan', [IkanController::class, 'create']);
Route::post('add-ikan', [IkanController::class, 'store']);
Route::post('add-ikan-picture', [IkanController::class, 'picture']);
Route::get('ikan', [IkanController::class, 'index']);

Route::get('/', function () {
    return view('index');
});

Route::get('/a', function () {
    $picPath = "None";
    return view('form', compact('picPath'));
});
 
Route::get('/Oranda', function () {
    return view('fish/Oranda');
});

Route::get('/Ranchu', function () {
    return view('fish/Ranchu');
});


Route::get('/Ryukin', function () {
    return view('fish/Ryukin');
});


Route::get('/Demekin', function () {
    return view('fish/Demekin');
});


Route::get('/Unik', function () {
    return view('fish/Unik');
});

Route::get('/Lain', function () {
    return view('fish/Lain');
});

Route::get('/Contact', function() {
    return view('misc/contact');
});

Route::get('/About', function() {
    return view('misc/about');
});

Route::get('/Ketentuan', function() {
    return view('misc/ketentuan');
});