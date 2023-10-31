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


Route::group(['middleware' => ['setLocale']], function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/prd', function () {
        return view('company.index');
    });

    Route::get('prd-detail/{company}', [CompanyController::class, 'show']);
    // Route::get('/prd-detail', [PrdController::class, 'show']);
    Route::post('/prd-post', [PrdController::class, 'store']);
    // Route::get('/send-mail', [PrdController::class, 'sendEmail']);
});

Route::get('{locale}/', function ($local) {
    app()->setLocale($local);
    return view('index');
});
