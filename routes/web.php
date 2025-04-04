<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
// |

Route::get('/', function () {
    return view('welcome');
});
Route::get("/firstPage",function(){
    return view('firstPage');
});
Route::post("/firstController",[FirstController::class,"firstControllerFunction"])->name("first");