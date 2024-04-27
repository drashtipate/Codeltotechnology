<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/app', function () {
//     dd('your route is working');
// });


    Route::get('/', [Usercontroller::class,'index'])->name('index');

    #service
    Route::get('/services', [Usercontroller::class,'service'])->name('/services');

        #contact
        Route::get('/contactus', [Usercontroller::class,'contact'])->name('contact-us');
        Route::post('/contactus', [Usercontroller::class,'contactus']);

