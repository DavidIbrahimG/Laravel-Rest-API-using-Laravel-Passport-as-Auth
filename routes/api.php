<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Country\CountryController;
use App\Http\Controllers\Country\Country;
use App\Http\Controllers\FileController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
Route::get('country', [CountryController::class, 'country']);
Route::get('country/{id}', [CountryController::class, 'countryByID']);
Route::post('country', [CountryController::class, 'countrysave']); 
Route::put('country/{id}', [CountryController::class, 'countryupdate']);
Route::delete('country/{id}', [CountryController::class, 'countrydelete']);
*/


/*
Route::group(['middleware' => 'auth:api'], function(){
    Route::apiResource('country', Country::class);
});
*/

Route::apiResource('country', Country::class);
Route::post('countrysave', [FileController::class, 'countrysave']);
Route::get('countryupload', [FileController::class, 'countryupload']);

