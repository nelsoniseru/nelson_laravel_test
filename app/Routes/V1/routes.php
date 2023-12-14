<?php

use Illuminate\Support\Facades\Route;
use App\Api\V1\Controllers\LoginController;
use App\Api\V1\Controllers\SubscriptionController;
use Abraham\TwitterOAuth\TwitterOAuth;
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
Route::group(['middleware' => 'web'], function ($router) {

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login/twitter', [LoginController::class, 'redirectToProvider']);
Route::get('/twitter/callback', [LoginController::class, 'handleProviderCallback']);
Route::get('/profile', [LoginController::class, 'handleProviderCallback'])->name('handleProviderCallback');
Route::get('/login',[LoginController::class,'login']);
Route::get('/channel-subscription',[SubscriptionController::class,'SubscribeChannel']);
});