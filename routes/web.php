<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AddBrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\WarehouseController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/employee', [EmployeeController::class, 'employee'])->name('employee');
Route::get('/staff', [EmployeeController::class, 'staff'])->name('staff');

Route::get('/customer', [CustomerController::class, 'customer'])->name('customer');

Route::get('/account', [AccountController::class, 'account'])->name('account');
Route::get('/admin/staff/create', [EmployeeController::class, 'create'])->name('staff.create');
Route::post('/admin/staff/stored', [EmployeeController::class, 'stored'])->name('staff.stored');

Route::get('/brand', [AddBrandController::class, 'brand'])->name('brand');
Route::get('/admin/brand/create', [AddBrandController::class, 'create'])->name('brand.create');
Route::post('/admin/brand/stored', [AddBrandController::class, 'stored'])->name('brand.stored');
Route::get('/admin/brand/delete/{brand_id}', [AddBrandController::class, 'delete'])->name('brand.delete');
Route::get('/admin/brand/edit/{brand_id}', [AddBrandController::class, 'edit'])->name('brand.edit');
Route::post('/admin/brand/update/{brand_id}', [AddBrandController::class, 'update'])->name('brand.update');

Route::get('/warehouse', [WarehouseController::class, 'warehouse'])->name('warehouse');
Route::get('/admin/warehouse/create', [WarehouseController::class, 'create'])->name('warehouse.create');
Route::post('/admin/warehouse/stored', [WarehouseController::class, 'stored'])->name('warehouse.stored');
Route::get('/admin/warehouse/delete/{warehouse_id}', [WarehouseController::class, 'delete'])->name('warehouse.delete');

Route::get('/provider', [SupplierController::class, 'provider'])->name('provider');
Route::get('/admin/provider/create', [SupplierController::class, 'create'])->name('provider.create');
Route::post('/admin/provider/stored', [SupplierController::class, 'stored'])->name('provider.stored');
Route::get('/admin/provider/delete/{supplier_id}', [SupplierController::class, 'delete'])->name('provider.delete');

Route::get('/product', [ProductController::class, 'product'])->name('product');
Route::get('/admin/product/detail/{product_id}', [ProductController::class, 'detail'])->name('product.detail');
Route::get('/admin/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/admin/product/stored', [ProductController::class, 'stored'])->name('product.stored');
Route::get('/admin/product/delete/{product_id}', [ProductController::class, 'delete'])->name('product.delete');
Route::get('/admin/product/edit/{product_id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/admin/product/update/{product_id}', [ProductController::class, 'update'])->name('product.update');

Route::get('/signup', [HomeController::class, 'signup'])->name('account.signup');
Route::get('/account/create', [AccountController::class, 'create'])->name('account.create');
Route::post('/account/stored', [AccountController::class, 'stored'])->name('account.stored');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('CheckLogout');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::group(['middleware' => 'CheckLogin'], function () {
    Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
    Route::get('/member', [MemberController::class, 'member'])->name('member');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/search', [MemberController::class, 'getSearch'])->name('search');

Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/addCart/{product_id}', [CartController::class, 'addCart'])->name('addCart');
Route::get('/deleteCart/{product_id}', [CartController::class, 'deleteCart'])->name('deleteCart');
Route::get('/updateCart', [CartController::class, 'getUpdateCart'])->name('getUpdateCart');

Route::post('/cart/stored', [CartController::class, 'stored'])->name('cart.stored');

Route::get('/success', [CartController::class, 'success'])->name('success');

Route::get('/order', [CartController::class, 'order'])->name('order');
Route::get('/admin/order/edit/{order_id}', [CartController::class, 'edit'])->name('order.edit');
Route::post('/admin/order/update/{order_id}', [CartController::class, 'update'])->name('order.update');
Route::get('/admin/order/delete/{order_id}', [CartController::class, 'delete'])->name('order.delete');

Route::get('/historypurchases', [CartController::class, 'historypurchases'])->name('historypurchases');
Route::get('/member/edithistorypurchases/{order_id}', [CartController::class, 'edithistorypurchases'])->name('historypurchases.edit');
Route::post('/member/updatehistorypurchases/{order_id}', [CartController::class, 'updatehistorypurchases'])->name('historypurchases.update');
