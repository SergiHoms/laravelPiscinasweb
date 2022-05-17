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

Route::get('/', function () {
    return view('front.pages.home.desktop.home');
});

Route::get('/productos', function () {
    return view('front.pages.products.desktop.products');
});


Route::get('/producto', function () {
    return view('front.pages.product.desktop.product');
});


Route::get('/admin', function () {
    return view('front.pages.paneldeadministracion.desktop.paneldeadministracion');
});

Route::get('/faqs', function () {
    return view('front.pages.faqs.desktop.faqs');
});


Route::get('/faqs', function () {
    return view('front.pages.faqs.desktop.faqs');
});


Route::get('/contacto', function () {
    return view('front.pages.contact.desktop.contact');
});


Route::get('/checkout', function () {
    return view('front.pages.checkout.desktop.checkout');
});


Route::get('/carrito', function () {
    return view('front.pages.carrito.desktop.carrito');
});


