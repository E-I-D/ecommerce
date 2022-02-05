<?php

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

/*
|------------------------------------------------------------------------
|Routes of front-end
|-------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/explorez-notre-marketplace', function () {
    return view('visitor.vendor-store-grid');
})->name('store-grid');

Route::get('/liste-de-nos-vendeurs', function () {
    return view('visitor.vendor-store-list');
})->name('store-list');

Route::get('/categorie', function () {
    return view('visitor.category');
})->name('category');

Route::get('/nos-produit', function () {
    return view('visitor.category-list');
})->name('cat-list');

