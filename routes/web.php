<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PrdController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('{locale}/', function ($local) {
    App::setLocale($local);
    return view('index');
});

Route::get('/prd', [CompanyController::class, 'formPrd']);
Route::get('/prd-detail', [PrdController::class, 'show']);
Route::post('/prd-post', [PrdController::class, 'store']);
Route::get('/send-mail', [PrdController::class, 'sendEmail']);
