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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login-proses');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register-proses');

Route::get('/', [OrganizationsController::class, 'publicIndex'])->name('pub-organizations');

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/user/home', function () {
    return view('user.home.index', [
            'title' => 'Home',
            'subtitle' => 'Health Services'
        ]);
    });

    Route::get('/user/dashboard', [DashboardController::class, 'index'])->name('us-dashboard');

    Route::get('/user/organizations', [OrganizationsController::class, 'index'])->name('us-organizations');
    Route::post('/user/organizations', [OrganizationsController::class, 'store'])->name('us-organizations-post');
    Route::get('/user/organizations/create', [OrganizationsController::class, 'create'])->name('us-organizations-create');

    Route::get('/user/groups', [GroupsController::class, 'index'])->name('us-groups');
    Route::get('/user/groups/{group:name}', [GroupsController::class, 'show'])->name('us-groups-detail');

    Route::get('/user/types', [TypesController::class, 'index'])->name('us-types');
});

// Route::get('/data'), [];
