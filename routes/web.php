<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrganizationsController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login-proses');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register-proses');

Route::get('/', [OrganizationsController::class, 'index'])->name('organizations');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('/organizations', [OrganizationsController::class, 'store'])->name('organizations-post');
    Route::get('/organizations/create', [OrganizationsController::class, 'create'])->name('organizations-create');

    Route::get('/groups', [GroupsController::class, 'index'])->name('groups');
    Route::get('/groups/{group:name}', [GroupsController::class, 'show'])->name('groups-detail');

    Route::get('/types', [TypesController::class, 'index'])->name('login');
});

// Route::get('/data'), [];
