<?php

use App\Http\Controllers\ClubsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/api/clubs', [ClubsController::class,'index']);
Route::get('/api/clubs/{id}', [ClubsController::class,'show']);
Route::post('/api/clubs', [ClubsController::class,'store']);
Route::get('/api/clubs/{id}', [ClubsController::class,'update']);
Route::get('/api/clubs/{id}', [ClubsController::class,'destroy']);

            /* VIEW */

Route::get('/clubs/new', [ClubsController::class,'newView']);
Route::get('/clubs/edit/{id}', [ClubsController::class,'editView']);
Route::get('/clubs/list', [ClubsController::class,'listView']);