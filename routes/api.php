<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Shop\CompanyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('companies', CompanyController::class);

Route::apiResource('cart', CartController::class);
Route::apiResource('/', HomeController::class);
Route::apiResource('cart', CheckoutController::class);
Route::apiResource('gift-card', GiftCardController::class);
Route::apiResource('store', StoreController::class);
Route::apiResource('review', ReviewController::class);
Route::apiResource('product', ProductController::class);
Route::apiResource('auth', AuthController::class);
Route::apiResource('account', AccountController::class);