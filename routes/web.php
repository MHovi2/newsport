<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

//Index Route
Route::get('/',[FrontendController::class,'index'])->name('index');
//News Page Route..
Route::get('/news',[FrontendController::class,'news'])->name('news');
//Category Page Route..
Route::get('/category',[FrontendController::class,'category'])->name('category');

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[BackendController::class,'index'])->name('index');

    Route::get('/publish-news',[BackendController::class,'publishNews'])->name('publish.news');
    Route::post('/publish-news',[BackendController::class,'addNews']);
    

    Route::get('/manage-news',[BackendController::class,'manageNews'])->name('manage.news');
    

    Route::get('/add-category',[BackendController::class,'addCategory'])->name('add.category');
    Route::post('/add-category',[BackendController::class,'postCategory']);
    Route::get('/manage-category',[BackendController::class,'manageCategory'])->name('manage.category');

    Route::get('/news-trash',[BackendController::class,'newsTrash'])->name('news.trash');

    Route::get('/gallery',[BackendController::class,'gallery'])->name('gallery');

    


    Route::get('/log-out',[BackendController::class,'logout'])->name('log.out');
});

require __DIR__.'/auth.php';
