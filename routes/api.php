<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Usercontroller;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
#apiResourse
// Route::apiResourse('index', [Usercontroller::class]);


Route::get('service/get', [Usercontroller::class,'service']);

Route::get('aboutus/get', [Usercontroller::class,'aboutus']);
Route::post('aboutus/store', [Usercontroller::class,'aboutusstore']);
Route::get('aboutus/{id}', [Usercontroller::class,'aboutusshow']);
Route::put('aboutus/update/{id}', [Usercontroller::class,'aboutus_update']);
Route::delete('aboutus/delete/{id}', [Usercontroller::class,'aboutus_delete']);

Route::get('client/get', [Usercontroller::class,'client']);
Route::post('client/store', [Usercontroller::class,'clientstore']);
Route::get('client/{id}', [Usercontroller::class,'clientshow']);
Route::put('client/update/{id}', [Usercontroller::class,'client_update']);
Route::delete('client/delete/{id}', [Usercontroller::class,'client_delete']);

Route::get('menu_items/get', [Usercontroller::class,'navbar']);
Route::post('menu_items/store', [Usercontroller::class,'navbarmenustore']);
Route::get('menu_items/{id}', [Usercontroller::class,'menuitemshow']);
Route::delete('menu_items/delete/{id}', [Usercontroller::class,'menuitems_delete']);

Route::get('contactus/get', [Usercontroller::class,'contactus']);
Route::get('contactus/{id}', [Usercontroller::class,'contactusShow']);

Route::get('siteconfig/get', [Usercontroller::class,'siteconfig']);
Route::post('siteconfig/store', [Usercontroller::class,'siteconfigstore']);
Route::put('siteconfig/update/{id}', [Usercontroller::class,'siteconfig_update']);
Route::delete('siteconfig/delete/{id}', [Usercontroller::class,'siteconfig_delete']);  

Route::get('stats_number/get', [Usercontroller::class, 'stats_number']);
Route::post('stats_number/store', [Usercontroller::class,'statsnumberstore']);
Route::put('stats_number/update/{id}', [Usercontroller::class,'statsnumber_update']);
Route::delete('stats_number/delete/{id}', [Usercontroller::class,'statsnumber_delete']);

Route::get('technology/get', [Usercontroller::class, 'technology']);

Route::get('links/get', [Usercontroller::class, 'links']);

