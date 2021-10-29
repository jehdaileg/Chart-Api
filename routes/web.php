<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ChartJSController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('stock/add', [StockController::class,'create']);

Route::post('stock/add', [StockController::class, 'store']);

Route::get('stocks', [StockController::class, 'index']);

Route::get('stock/chart', [StockController::class, 'chart']);


Route::get('chart-js', [ChartJSController::class, 'index']);

