<?php

use App\Http\Controllers\Admin\CustomerManageController;
use App\Http\Controllers\Admin\OrderManageController;
use App\Http\Controllers\Customer\CartController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Customer\CustomerProfileController;
use App\Http\Controllers\Customer\OrderController;
use App\Http\Controllers\Customer\ReviewController;
use App\Http\Controllers\Customer\WishListController;
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


// ============== start frontend routes ============== //

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/product/{id}', [HomeController::class,'productView'])->name('view.product');
Route::get('/quick-product/{id}', [HomeController::class,'quickProductView'])->name('quick.view.product');
Route::get('/about-us', [HomeController::class,'about'])->name('about');
Route::get('/contact-us', [HomeController::class,'contact'])->name('contact');
Route::get('/category-product/{id}', [HomeController::class, 'productOfCategory'])->name('category.product');
Route::match(['get', 'post'], '/search', [HomeController::class, 'search'])->name('search');


Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/filter-products', [ShopController::class, 'index'])->name('filter.products');

// cart routes 
Route::get('/cart', [CartController::class,'cart'])->name('cart');
Route::post('/add-to-cart/{id}', [CartController::class,'addToCart'])->name('add.to.cart');
Route::post('/single-add-to-cart/{id}', [CartController::class,'singleAddToCart'])->name('single.add.to.cart');
Route::get('/increment-cart/{id}', [CartController::class, 'incrementQuantity'])->name('cart.incrementQuantity');
Route::get('/decrement-cart/{id}', [CartController::class, 'decrementQuantity'])->name('cart.decrementQuantity');
Route::delete('/remove-cart/{id}', [CartController::class, 'removeCartItem'])->name('cart.remove');

// ============== end frontend routes ============== //


// ============== start customer routes ============== //

Route::middleware(['auth'])->group(function () {
    Route::get('/customer-dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');
    Route::get('/customer-orders', [CustomerController::class, 'customerOrders'])->name('customer.orders');

    Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('place.order');
    Route::get('/order-success', [OrderController::class, 'orderConfirmation'])->name('order.success');

    Route::get('/customer-profile', [CustomerProfileController::class, 'edit'])->name('customer.profile.edit');
    Route::patch('/customer-profile', [CustomerProfileController::class, 'update'])->name('customer.profile.update');
    Route::delete('/customer-profile', [CustomerProfileController::class, 'destroy'])->name('customer.profile.destroy');

    Route::get('/wish-list', [WishListController::class,'index'])->name('wishlist');
    Route::post('/toggle-wish-list/{id}', [WishListController::class,'toggleWish'])->name('wishlist.toggle');

    Route::resource('reviews', ReviewController::class);
});

// ============== end customer routes ============== //


// ============== start admin routes ============== //
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

    //  search route
    Route::get('/search', [IndexController::class, 'search'])->name('search');
});

Route::get('/admin-login', [IndexController::class, 'login'])->name('admin.login');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);

// ============== end admin routes ============== //


// ============== start all settings route ============== //
Route::get('/general-setting', [SettingsController::class, 'index'])->name('general.setting');
Route::post('/setting-update', [SettingsController::class, 'update'])->name('setting.update');

Route::get('/email-setting', [SettingsController::class, 'emailSetting'])->name('email.setting');
Route::post('/email-update', [SettingsController::class, 'emailUpdate'])->name('email.update');

Route::get('application-cache-clear', [SettingsController::class, 'cacheClear'])->name('application.cache.clear');

// ============== end all settings route ============== //


require __DIR__ . '/auth.php';