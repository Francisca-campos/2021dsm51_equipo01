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

Route::middleware('auth:api')->get('/usuarios', function (Request $request) {
    return $request->usuarios();
});

Route::post('/tokens/create', function (Request $request) {
    $request->validate([
        'email' => 'required|email'
        , 'password' => 'required'
    ]);

    if(!auth()->attempt($request->only('email', 'password'))) {
        throw new AuthenticationException();
    }
    return [
        'token' => auth()->usuarios()->createToken('test')->plainTextToken
    ];
});
