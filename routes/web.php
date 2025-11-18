<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\ProductVariantController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ShippingAddressController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\WishlistController;





Route::get('/', function () {
    return view('welcome');
});
// require __DIR__ .'/auth.php';

Route::get('/controller', [Controller::class, 'index']);
Route::post('/controller/store', [Controller::class, 'store']);
Route::put('/controller/update', [Controller::class, 'update']);
Route::delete('/controller/delete', [Controller::class, 'delete']);
Route::get('/controller/destroy', [Controller::class, 'destroy']);

Route::get('/controller/edit', [Controller::class, 'edit']);

Route::get('/products', [ProductController::class, 'index'])->name('getalproducts');
Route::post('/product/store', [ProductController::class, 'store'])->name('store.product');
Route::put('/product/update', [ProductController::class, 'update'])->name('update.product');
Route::delete('/product/delete', [ProductController::class, 'delete'])->name('delete.product');
Route::get('/product/destroy', [ProductController::class, 'destroy'])->name('destroy.product');

Route::get('/product/edit', [ProductController::class, 'edit'])->name('edit.product');

Route::get('/cart', [CartController::class, 'index'])->name('getallcarts');
Route::post('/cart/store', [CartController::class, 'store'])->name('store.cart');
Route::put('/cart/update', [CartController::class, 'update'])->name('update.cart');
Route::delete('/cart/delete', [CartController::class, 'delete'])->name('delete.cart');
Route::get('/cart/destroy', [CartController::class, 'destroy'])->name('destroy.cart');

Route::get('/cart/edit', [CartController::class, 'edit'])->name('edit.cart');

Route::get('/cartitem', [CartitemController::class, 'index'])->name('getallcartitems');
Route::post('/cartitem/store', [CartitemController::class, 'store'])->name('store.cartitem');
Route::put('/cartitem/update', [CartitemController::class, 'update'])->name('update.cartitem');
Route::delete('/cartitem/delete', [CartitemController::class, 'delete'])->name('delete.cartitem');
Route::get('/cartitem/destroy', [CartitemController::class, 'destroy'])->name('destroy.cartitem');

Route::get('/cartitem/edit', [CartitemController::class, 'edit'])->name('edit.cartitem');

Route::get('/category', [CategoryController::class, 'index'])->name('getallcategories');
Route::post('/category/store', [CategoryController::class, 'store'])->name('store.category');
Route::put('/category/update', [CategoryController::class, 'update'])->name('update.category');
Route::delete('/category/delete', [CategoryController::class, 'delete'])->name('delete.category');
Route::get('/category/destroy', [CategoryController::class, 'destroy'])->name('destroy.category');

Route::get('/category/edit', [CategoryController::class, 'edit'])->name('edit.category');

Route::get('/coupon', [CouponController::class, 'index'])->name('getalcoupons');
Route::post('/coupon/store', [CouponController::class, 'store'])->name('store.coupon');
Route::put('/coupon/update', [CouponController::class, 'update'])->name('update.coupon');
Route::delete('/coupon/delete', [CouponController::class, 'delete'])->name('delete.coupon');
Route::get('/coupon/destroy', [CouponController::class, 'destroy'])->name('destroy.coupon');

Route::get('/coupon/edit', [CouponController::class, 'edit'])->name('edit.coupon');

Route::get('/order', [OrderController::class, 'index'])->name('getallorders');
Route::post('/order/store', [OrderController::class, 'store'])->name('store.order');
Route::put('/order/update', [OrderController::class, 'update'])->name('update.order');
Route::delete('/order/delete', [OrderController::class, 'delete'])->name('delete.order');
Route::get('/order/destroy', [OrderController::class, 'destroy'])->name('destroy.order');

Route::get('/order/edit', [OrderController::class, 'edit']);

Route::get('/orderitem', [OrderItemController::class, 'index']);
Route::post('/orderitem/store', [OrderitemController::class, 'store']);
Route::put('/orderitem/update', [OrderitemController::class, 'update']);
Route::delete('/orderitem/delete', [OrderitemController::class, 'delete']);
Route::get('/orderitem/destroy', [OrderitemController::class, 'destroy']);

Route::get('/orderitem/edit', [OrderitemController::class, 'edit']);


Route::get('/payment', [PaymentController::class, 'index']);
Route::post('/payment/store', [PaymentController::class, 'store']);
Route::put('/payment/update', [PaymentController::class, 'update']);
Route::delete('/payment/delete', [PaymentController::class, 'delete']);
Route::get('/payment/destroy', [PaymentController::class, 'destroy']);

Route::get('/payment/edit', [PaymentController::class, 'edit']);

Route::get('/productImage', [ProductImageController::class, 'index']);
Route::post('/productImage/store', [ProductImageController::class, 'store']);
Route::put('/productImage/update', [ProductImageController::class, 'update']);
Route::delete('/productImage/delete', [ProductImageController::class, 'delete']);
Route::get('/productImage/destroy', [ProductImageController::class, 'destroy']);

Route::get('/productImage/edit', [ProductImageController::class, 'edit']);

Route::get('/productVariant', [ProductVariantController::class, 'index']);
Route::post('/productVariant/store', [ProductVariantController::class, 'store']);
Route::put('/productVariant/update', [ProductVariantController::class, 'update']);
Route::delete('/productVariant/delete', [ProductVariantController::class, 'delete']);
Route::get('/productVariant/destroy', [ProductVariantController::class, 'destroy']);

Route::get('/productVariant/edit', [ProductVariantController::class, 'edit']);


Route::get('/review', [ReviewController::class, 'index']);
Route::post('/review/store', [ReviewController::class, 'store']);
Route::put('/review/update', [ReviewController::class, 'update']);
Route::delete('/review/delete', [ReviewController::class, 'delete']);
Route::get('/review/destroy', [ReviewController::class, 'destroy']);

Route::get('/review/edit', [ReviewController::class, 'edit']);


Route::get('/setting', [SettingController::class, 'index']);
Route::post('/setting/store', [SettingController::class, 'store']);
Route::put('/setting/update', [SettingController::class, 'update']);
Route::delete('/setting/delete', [SettingController::class, 'delete']);
Route::get('/setting/destroy', [SettingController::class, 'destroy']);

Route::get('/setting/edit', [SettingController::class, 'edit']);


Route::get('/shippingAddress', [ShippingAddressController::class, 'index']);
Route::post('/shippingAddress/store', [ShippingAddressController::class, 'store']);
Route::put('/shippingAddress/update', [ShippingAddressController::class, 'update']);
Route::delete('/shippingAddress/delete', [ShippingAddressController::class, 'delete']);
Route::get('/shippingAddress/destroy', [ShippingAddressController::class, 'destroy']);

Route::get('/shippingAddress/edit', [ShippingAddressController::class, 'edit']);

Route::get('/subCategory', [SubCategoryController::class, 'index']);
Route::post('/subCategory/store', [SubCategoryController::class, 'store']);
Route::put('/subCategory/update', [SubCategoryController::class, 'update']);
Route::delete('/subCategory/delete', [SubCategoryController::class, 'delete']);
Route::get('/subCategory/destroy', [SubCategoryController::class, 'destroy']);

Route::get('/subCategory/edit', [SubCategoryController::class, 'edit']);

Route::get('/user', [UserController::class, 'index']);
Route::post('/user/store', [UserController::class, 'store']);
Route::put('/user/update', [UserController::class, 'update']);
Route::delete('/user/delete', [UserController::class, 'delete']);
Route::get('/user/destroy', [UserController::class, 'destroy']);

Route::get('/user/edit', [UserController::class, 'edit']);

Route::get('/Wishlist', [WishlistController::class, 'index']);
Route::post('/Wishlist/store', [WishlistController::class, 'store']);
Route::put('/Wishlist/update', [WishlistController::class, 'update']);
Route::delete('/Wishlist/delete', [WishlistController::class, 'delete']);
Route::get('/Wishlist/destroy', [WishlistController::class, 'destroy']);

Route::get('/Wishlist/edit', [WishlistController::class, 'edit']);
