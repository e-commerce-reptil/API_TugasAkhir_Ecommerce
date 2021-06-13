<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
use App\Http\Livewire\Articles;
use App\Http\Livewire\Categories;
use App\Http\Livewire\Posts;
use App\Http\Controllers\API\AuthController;

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

// Route::get('/admin', [PageController::class, 'index']);

Route::get('/posts', Posts::class);

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::post('article', [Articles::class, 'store']);
    Route::get('article', Articles::class)->name('article');
    Route::get('posts', Posts::class)->name('posts');
    Route::get('category', Categories::class)->name('category');
});