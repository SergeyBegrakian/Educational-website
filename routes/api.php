<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/public-event', function (Request $request) {
    $channelName = $request->post('channelName');
    $message = $request->post('message');
    broadcast(new PublicMessageEvent( $channelName, $message ));
})->middleware('throttle:60,1'); // 60 requests/minute are allowed.

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
