<?php

use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[BackendController::class,'index'])->name('index');
    Route::get('/publish-news',[BackendController::class,'publishNews'])->name('publish.news');
    Route::post('/publish-news',[BackendController::class,'addNews']);

    Route::get('/manage-news',[BackendController::class,'manageNews'])->name('manage.news');



    Route::get('/log-out',[BackendController::class,'logout'])->name('log.out');
});

require __DIR__.'/auth.php';
