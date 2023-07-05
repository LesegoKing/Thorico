<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\WebsiteController;

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

Route::get('/', [WebsiteController::class, 'index']);

Route::get('/about', [WebsiteController::class, 'about']);


Route::get('/faq', [WebsiteController::class, 'faq']);

/*Indoor*/

Route::get('/indoor/bedroom', function () {
    return view('indoor/bedroom');
});

Route::get('/indoor/chairs', function () {
    return view('indoor/chairs');
});

Route::get('/indoor/sofas', function () {
    return view('indoor/sofas');
});

Route::get('/indoor/tables', function () {
    return view('indoor/tables');
});

/*Outdoor*/

Route::get('/outdoor/outdoor-tables', function () {
    return view('outdoor/outdoor-tables');
});

Route::get('/outdoor/outdoor-chairs', function () {
    return view('outdoor/outdoor-chairs');
});

Route::get('/outdoor/outdoor-couches', function () {
    return view('outdoor/outdoor-couches');
});

/*Leather Acces.*/

Route::get('/leather-accessories/laptop-bags', function () {
    return view('leather-accessories/laptop-bags');
});

Route::get('/leather-accessories/belts', function () {
    return view('leather-accessories/belts');
});

Route::get('/leather-accessories/side-bags', function () {
    return view('leather-accessories/side-bags');
});

/* Contact-Us */
Route::get('/contact-us',[ContactController::class,'contact']);
Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contact.send');

/* Products */
Route::get('/shop', [ProductsController::class, 'categories']);
Route::get('/products', [ProductsController::class, 'products']);
Route::get('/{sub_category_id}/products', [ProductsController::class, 'subCategoryProducts']);
Route::get('/{product_id}/details', [ProductsController::class, 'productsDetails']);

/* Photo */

Route::get('/upload', [PhotoController::class,'create']);
Route::post('/upload', [PhotoController::class,'store']);
