<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\ProductViewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
/// Agen
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [OrderController::class, 'index'])->name('admin.order_index');
Route::get('/admin/agen', [AdminController::class, 'indexAgen'])->name('admin.agen_index');
Route::get('/admin/agen/edit/{id}', [AdminController::class, 'editAgen'])->name('admin.agen_edit');
Route::patch('/admin/agen/update/{id}', [AdminController::class, 'updateAgen'])->name('admin.agen_update');
Route::get('/admin/agen/create', [AdminController::class, 'createAgen'])->name('admin.agen_create');
Route::post('/admin/agen/store', [AdminController::class, 'storeAgen'])->name('admin.agen_store');
Route::delete('/admin/agen/{id}', [AdminController::class, 'destroyAgen'])->name('admin.agen_destroy');

/// Produk
Route::get('/admin/produk_a', [ProdukController::class, 'index_a'])->name('admin.produk_index_a');
Route::get('/admin/produk_b', [ProdukController::class, 'index_b'])->name('admin.produk_index_b');
Route::get('/admin/produk/create', [ProdukController::class, 'create'])->name('admin.produk_create');
Route::post('/admin/produk/store', [ProdukController::class, 'store'])->name('admin.produk_store');
Route::get('/admin/produk/edit/{id}', [ProdukController::class, 'edit'])->name('admin.produk_edit');
Route::patch('/admin/produk/update/{id}', [ProdukController::class, 'update'])->name('admin.produk_update');
Route::delete('/admin/produk/{id}', [ProdukController::class, 'destroy'])->name('admin.produk_destroy');

/// Order
Route::get('/admin/order', [OrderController::class, 'index'])->name('admin.order_index');
Route::get('/admin/order/create', [OrderController::class, 'create'])->name('admin.order_create');
Route::post('/admin/order/store', [OrderController::class, 'store'])->name('admin.order_store');
Route::get('/admin/order/edit/{id}', [OrderController::class, 'edit'])->name('admin.order_edit');
Route::patch('/admin/order/update/{id}', [OrderController::class, 'update'])->name('admin.order_update');
Route::delete('/admin/order/{id}', [OrderController::class, 'destroy'])->name('admin.order_destroy');

Route::get('/admin/bukti', [OrderController::class, 'bukti'])->name('admin.bukti_index');

/// Konsumen
Route::get('/admin/konsumen', [KonsumenController::class, 'index'])->name('admin.konsumen_index');
Route::get('/admin/konsumen/create', [KonsumenController::class, 'create'])->name('admin.konsumen_create');
Route::post('/admin/konsumen/store', [KonsumenController::class, 'store'])->name('admin.konsumen_store');
Route::get('/admin/konsumen/edit/{id}', [KonsumenController::class, 'edit'])->name('admin.konsumen_edit');
Route::patch('/admin/konsumen/update/{id}', [KonsumenController::class, 'update'])->name('admin.konsumen_update');
Route::delete('/admin/konsumen/{id}', [KonsumenController::class, 'destroy'])->name('admin.konsumen_destroy');


/// Agen View - Order
Route::get('/agen/order', [AgentController::class, 'indexOrder'])->name('agen.order_index');
Route::post('/agen/order/bukti', [AgentController::class, 'bukti'])->name('agen.bukti');
Route::get('/agen/order/create', [AgentController::class, 'createOrder'])->name('agen.order_create');
Route::post('/agen/order/store', [AgentController::class, 'storeOrder'])->name('agen.order_store');
Route::get('/agen/order/edit/{id}', [AgentController::class, 'editOrder'])->name('agen.order_edit');
Route::patch('/agen/order/update/{id}', [AgentController::class, 'updateOrder'])->name('agen.order_update');
Route::delete('/agen/order/{id}', [AgentController::class, 'destroyOrder'])->name('agen.order_destroy');

/// Agen View - Konsumen
Route::get('/agen/konsumen', [AgentController::class, 'indexKonsumen'])->name('agen.konsumen_index');
Route::get('/agen/konsumen/create', [AgentController::class, 'createKonsumen'])->name('agen.konsumen_create');
Route::post('/agen/konsumen/store', [AgentController::class, 'storeKonsumen'])->name('agen.konsumen_store');
Route::get('/agen/konsumen/edit/{id}', [AgentController::class, 'editKonsumen'])->name('agen.konsumen_edit');
Route::patch('/agen/konsumen/update/{id}', [AgentController::class, 'updateKonsumen'])->name('agen.konsumen_update');
Route::delete('/agen/konsumen/{id}', [AgentController::class, 'destroyKonsumen'])->name('agen.konsumen_destroy');

/// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog1', [BlogController::class, 'blog1'])->name('blog1');
Route::get('/blog2', [BlogController::class, 'blog2'])->name('blog2');
Route::get('/blog3', [BlogController::class, 'blog3'])->name('blog3');

/// Blog
Route::get('/produk', [ProductViewController::class, 'index'])->name('produk');

/// Blog
Route::get('/kontak', [ProductViewController::class, 'kontak'])->name('kontak');

/// Invoice
Route::get('print-pdf/{type}/{id}', [InvoiceController::class, 'getPDF'])->name('invoice');
Route::get('print-pdf-edit/{type}', [InvoiceController::class, 'getPDFEdit'])->name('invoice.edit');
Route::get('print-agen/{type}/{id}', [InvoiceController::class, 'getPDFAgen'])->name('invoice.agen');

/// Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');