<?php

use App\Http\Controllers\GroupsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrganizationsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TypesController;
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

// Route::get('/', function () {
//     return view('home.index', [
//         'title' => 'Home',
//         'subtitle' => 'Health Services'
//     ]);
// });
Route::get('/home', function () {
    return view('home.index', [
        'title' => 'Home',
        'subtitle' => 'Health Services'
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', [OrganizationsController::class, 'index']);
Route::post('/organizations', [OrganizationsController::class, 'store']);
Route::get('/organizations/create', [OrganizationsController::class, 'create']);

Route::get('/groups', [GroupsController::class, 'index']);
Route::get('/groups/{group:name}', [GroupsController::class, 'show']);

Route::get('/types', [TypesController::class, 'index']);

// Route::get('/data'), [];
