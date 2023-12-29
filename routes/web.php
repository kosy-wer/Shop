<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\LoginController;


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
Route::get('/Dasboard', function () {                                 // Matches The "/admin/users" URL
        return view('Dasboard');
});

Route::get('/Shop', function () {                                 // Match
	
	return view('Shop.index');
    });



Route::post('/Login', [LoginController::class, 'authenticate']);

Route::post('/Sign-Up', [LoginController::class, 'authenticate']);
Route::prefix('Register')->group(function () {
    Route::get('/Login', function () {
	    // Matches The "/admin/users" URL
	    return view('Register');
    });
   Route::get('/Sign-Up', function () {
	// Matches The "/admin/users" URL
	return view('Register');
    });

});


Route::get('/', function () {
    return view('welcome');
});

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});
