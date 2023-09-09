<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrganizationsController;

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
            'app' => 'Health Services',
            'title' => 'Home'
        ]);
    });

    Route::get('/user/dashboard', [DashboardController::class, 'userIndex'])->name('us-dashboard');

    Route::get('/user/organizations', [OrganizationsController::class, 'userIndex'])->name('us-organizations');
    Route::post('/user/organizations', [OrganizationsController::class, 'userStore'])->name('us-organizations-store');
    Route::get('/user/organizations/create', [OrganizationsController::class, 'userCreate'])->name('us-organizations-create');

    Route::get('/user/groups', [GroupsController::class, 'userIndex'])->name('us-groups');
    Route::post('/user/groups', [GroupsController::class, 'userStore'])->name('us-groups-store');
    Route::get('/user/groups/create', [GroupsController::class, 'userCreate'])->name('us-groups-create');

    Route::get('/user/types', [TypesController::class, 'userIndex'])->name('us-types');
    Route::post('/user/types', [TypesController::class, 'userStore'])->name('us-types-store');
    Route::get('/user/types/create', [TypesController::class, 'userCreate'])->name('us-types-create');
});

// Route::get('/data'), [];
