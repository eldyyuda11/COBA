<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// Route::get('/home', function() {
    //     return view('home');
    // })->name('home')->middleware('auth');


    Route::middleware(['auth'])->group(function () {
        Route::get('/home',[HomeController::class,'index'])->name('home');
        Route::post('/logoutpenulis',[HomeController::class,'logout'])->name('logoutpenulis');
        Route::middleware(['admin'])->group(function () {
            Route::resource('users', \App\Http\Controllers\UserController::class);
            Route::get('homeadmin',function () {
                return view('homeadmin');})->name('homeadmin');
            Route::resource('homeadmin', \App\Http\Controllers\AdminController::class);
            Route::put('/updateuser', [UserController::class, 'update'])->name('updateuser');
            Route::get('edituser/{id}',[UserController::class, 'showuser'])->name('edituser');
            Route::delete('/userdelete/{id}', [UserController::class, 'destroy'])->name('deleteuser');
            Route::resource('stories', \App\Http\Controllers\StoryController::class);
            Route::get('profile',[AdminController::class, 'profile'])->name('profile');
        });

        Route::middleware(['penulis'])->group(function () {
             Route::resource('homepenulis', \App\Http\Controllers\PenulisController::class);

        });





});
