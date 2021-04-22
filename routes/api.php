<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\JWTAuthController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
 
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
    Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
    Route::post('refresh', [\App\Http\Controllers\AuthController::class, 'refresh']);
    Route::post('me', [\App\Http\Controllers\AuthController::class, 'me']);

});
// Route::post('register', [JWTAuthController::class, 'register']);
// Route::post('login', [JWTAuthController::class, 'login']);
  
// Route::group(['middleware' => 'auth.jwt'], function () {
 
//     Route::post('logout', [JWTAuthController::class, 'logout']);
  
// });
// Route::post('register', 'AuthController@register');
// Route::post('login', 'AuthController@login');
// Route::post('recover', 'AuthController@recover');

// Route::group(['middleware' => ['jwt.auth']], function() {
//     Route::get('logout', 'AuthController@logout');

//     Route::get('test', function(){
//         return response()->json(['foo'=>'bar']);
//     });
// });
Route::middleware(['jwt.auth'])->group(function () {
    Route::apiResource('mesto',\App\Http\Controllers\MestoController::class);
    Route::apiResource('izdavac',\App\Http\Controllers\IzdavacController::class);
    Route::apiResource('knjiga',\App\Http\Controllers\KnjigaController::class);
    Route::apiResource('skola',\App\Http\Controllers\SkolaController::class);
    Route::apiResource('predmet',\App\Http\Controllers\PredmetController::class);
    Route::apiResource('zadatak',\App\Http\Controllers\ZadatakController::class);
    Route::apiResource('dokument',\App\Http\Controllers\DokumentController::class);
    Route::apiResource('test',\App\Http\Controllers\TestController::class);
    Route::apiResource('korisnik',\App\Http\Controllers\KorisnikController::class);
    Route::apiResource('nivo_obrazovanja',\App\Http\Controllers\NivoObrazovanjaController::class);
});
