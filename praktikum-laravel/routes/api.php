<?php

use App\Http\Controllers\ProductCategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix("v1")->group(function() {
    Route::apiResource("product-category", ProductCategoryController::class);

    //Terdapat Route single method seperti contoh berikut
    //Route::get("blabla", ProductCategoryController::class)
    //Route::post("blabla", ProductCategoryController::class)
    //Route::put("blabla", ProductCategoryController::class)
    //Route::delete("blabla", ProductCategoryController::class)
});
