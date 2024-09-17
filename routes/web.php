<?php

use App\Http\Controllers\Admin\CustomerManageController;
use App\Http\Controllers\Admin\OrderManageController;
use App\Http\Controllers\Customer\CartController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Customer\CustomerProfileController;
use App\Http\Controllers\Customer\OrderController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;




// ============== frontend routes ============== //
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/product/{id}', [HomeController::class,'productView'])->name('view.product');
Route::get('/about-us', [HomeController::class,'about'])->name('about');
Route::get('/contact-us', [HomeController::class,'contact'])->name('contact');
// Route::post('/search', [HomeController::class, 'search'])->name('search');
Route::match(['get', 'post'], '/search', [HomeController::class, 'search'])->name('search');


Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/filter-products', [ShopController::class, 'index'])->name('filter.products');


// ============== customer routes ============== //
Route::middleware(['auth'])->group(function () {
    Route::get('/customer-dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');
    Route::get('/customer-orders', [CustomerController::class, 'customerOrders'])->name('customer.orders');

    Route::get('/cart', [CartController::class,'cart'])->name('cart');
    Route::post('/add-to-cart/{id}', [CartController::class,'addToCart'])->name('add.to.cart');
    Route::post('/single-add-to-cart/{id}', [CartController::class,'singleAddToCart'])->name('single.add.to.cart');
    Route::patch('/cart/{id}', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
    Route::delete('/cart/{id}', [CartController::class, 'removeCartItem'])->name('cart.remove');

    Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('place.order');
    Route::get('/order-success', [OrderController::class, 'orderConfirmation'])->name('order.success');

    Route::get('/customer-profile', [CustomerProfileController::class, 'edit'])->name('customer.profile.edit');
    Route::patch('/customer-profile', [CustomerProfileController::class, 'update'])->name('customer.profile.update');
    Route::delete('/customer-profile', [CustomerProfileController::class, 'destroy'])->name('customer.profile.destroy');
});

// ============== admin routes ============== //
Route::middleware(['auth', 'permission:admin-panel'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users-create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users-store', [UserController::class, 'store'])->name('users.store');
    Route::get('/users-details/{id}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/users/roles/{user}', [UserController::class, 'role'])->name('users.roles.edit');
    Route::post('/users/roles/{user}', [UserController::class, 'giveRole'])->name('users.roles');

    Route::resource('orders', OrderManageController::class);
    Route::get('/export-section/{orderId}', [OrderManageController::class, 'exportSection'])->name('export.section');

    Route::resource('customers', CustomerManageController::class);

    // ============== search route ============== //
    Route::get('/search', [IndexController::class, 'search'])->name('search');
});

Route::get('/admin-login', [IndexController::class, 'login'])->name('admin.login');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__ . '/auth.php';

// ============== all settings route ============== //
Route::get('/general-setting', [SettingsController::class, 'index'])->name('general.setting');
Route::post('/setting-update', [SettingsController::class, 'update'])->name('setting.update');

Route::get('/email-setting', [SettingsController::class, 'emailSetting'])->name('email.setting');
Route::post('/email-update', [SettingsController::class, 'emailUpdate'])->name('email.update');

Route::get('application-cache-clear', [SettingsController::class, 'cacheClear'])->name('application.cache.clear');


Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);

