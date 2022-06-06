<?php


use App\Http\Livewire\Auth\{
    Register,
    Login,
    ForgotPassword,
    ResetPassword
};

use App\Http\Livewire\{
    Dashboard,
    Profile
};


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

// use App\Http\Controllers\{
 
// };

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

Route::redirect('/', '/login');
Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');
Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');
Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');

//clear cache
Route::get('/clear-all-cache', function () {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('clear-compiled');

    return "Cache cleard";
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');   
});

//fallback route
Route::fallback(function (){
    return view('errors.404');
});
