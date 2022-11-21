<?php

use App\Http\Controllers\PoppingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController as AdminPostController;
use App\Http\Controllers\BubbleTeaController;
use App\Http\Controllers\SugarController;
use App\Models\Popping;
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
     return view('home');
 });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/home', [ProductController::class, 'list_products']);

Route::get('/product', [ProductController::class, 'list_products']);

Route::get('/order_history', [\App\Http\Controllers\CommandController::class, 'order_for_order_history']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/basket/{id}', [ProductController::class, 'list_popping']);
Route::get('/basket/{id}', [ProductController::class, 'description'])->name('bubbletea.basket');
Route::post('/basket', [ProductController::class, 'add_product_bdd'])->name('basket');

require __DIR__.'/auth.php';



// ============================================= Route access admin\user ============================================


Route::middleware(['auth'])->group(function (){
 
    Route::get('/', function () {
        return view('home');
    });
});

Route::middleware(['admin'])->group(function (){
    
    Route::get('/admin', '\App\Http\Controllers\Autorisation@admin');
    Route::get('/admin', [BubbleTeaController::class, 'index'])->name('admin');

    Route::get('/admin/createBubble', [BubbleTeaController::class, 'CreateBubbleTea'])->name('createBubble');
    Route::post('/admin/createBubble', [BubbleTeaController::class, 'store'])->name('addBubble');

    Route::get('/admin/editBubble/{id}', [BubbleTeaController::class, 'editBubble'])->name('editBubble');
    Route::put('/admin/editBubble', [BubbleTeaController::class, 'update'])->name('updateBubble');

    Route::get('/admin/popping', [PoppingController::class, 'index'])->name('popping');

    Route::get('/admin/createPopping', [PoppingController::class, 'createPopping'])->name('createPopping');
    Route::post('/admin/createPopping', [PoppingController::class, 'store'])->name('addPopping');

    Route::get('/admin/editPopping/{id}', [PoppingController::class, 'editPopping'])->name('editPopping');
    Route::put('/admin/editPopping', [PoppingController::class, 'update'])->name('updatePopping');

    Route::get('/admin/sugar', [SugarController::class, 'index'])->name('sugar');

    Route::get('/admin/createSugar', [SugarController::class, 'createSugar'])->name('createSugar');
    Route::post('/admin/createSugar', [SugarController::class, 'store'])->name('addSugar');

    Route::get('/admin/editSugar/{id}', [SugarController::class, 'editSugar'])->name('editSugar');
    Route::put('/admin/editSugar', [SugarController::class, 'update'])->name('updateSugar');
    
    });
    