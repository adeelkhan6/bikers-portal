<?php

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

Route::get('/', 'ProductController@index')->name('/');

Route::get('/product-detail/{product}', 'ProductController@show')->name('product-detail');

Route::get('/cart', 'CartController@index')->name('cart');

Route::get('add-to-cart/{product}', 'CartController@store')->name('add-to-cart');

Route::get('/delete-cart-item/{id}', 'CartController@destroy')->name('delete-cart-item');

Route::get('/user-checkout/create', 'OrderController@create')->name('checkout');

Route::post('/user-order-store', 'OrderController@store')->name('user-order-store');

Route::get('/kawasaki', 'ProductController@kawasaki')->name('kawasaki');
Route::get('/yamaha', 'ProductController@yamaha')->name('yamaha');
Route::get('/honda', 'ProductController@honda')->name('honda');
Route::get('headlight', 'ProductController@headlight')->name('headlight');
Route::get('/tyre', 'ProductController@tyre')->name('tyre');
Route::get('/rim', 'ProductController@rim')->name('rim');
Route::get('/helmet', 'ProductController@helmet')->name('helmet');
Route::get('/jacket', 'ProductController@jacket')->name('jacket');
Route::get('/shoes', 'ProductController@shoes')->name('shoes');
Route::get('/rent', 'RentBikeController@index')->name('rent');

Route::post('/rent-bike-city', 'RentBikeController@cityBikes')->name('rent-bike-city');

Route::get('/rent-bike-detail/{rentBike}', 'RentBikeController@showRentBike')->name('rent-bike-detail');

Route::post('/rent-bike-checkout/{rentBike}', 'RentBikeController@rentBikeCheckout')->name('rent-bike-checkout');

Route::post('/rent-order-store', 'RentBikeController@rentOrderStore')->name('rent-order-store');

Route::post('/admin-dashboard/store-rent','HomeController@storeRent')->name('store-rent');

Auth::routes();

Route::get('/user/user-profile', 'RoleController@index')->name('profile');

Route::post('/user/update-password', 'RoleController@updatePassword')->name('update-password');

Route::post('/user/update-profile', 'RoleController@updateProfile')->name('update-profile');

Route::get('/admin-dashboard/block-user/{user}', 'HomeController@blockUser')->name('block-user');

Route::get('/admin-dashboard/unblock-user/{user}', 'HomeController@unblockUser')->name('unblock-user');

Route::get('/admin-dashboard', 'HomeController@index')->name('admin-dashboard');

Route::get('/admin-dashboard/orders', 'HomeController@orders')->name('orders');

Route::get('/admin-dashboard/accept-order/{order}', 'HomeController@acceptOrder')->name('accept-order');

Route::get('/admin-dashboard/reject-order/{order}', 'HomeController@rejectOrder')->name('reject-order');

Route::get('/admin-dashboard/accept-r-order/{rentOrder}', 'HomeController@acceptROrder')->name('accept-r-order');

Route::get('/admin-dashboard/reject-r-order/{rentOrder}', 'HomeController@rejectROrder')->name('reject-r-order');

Route::get('/admin-dashboard/order-detail/{order}', 'HomeController@orderDetail')->name('order-detail');

Route::get('/admin-dashboard/rent-orders', 'HomeController@rentOrders')->name('rent-orders');

Route::get('/admin-dashboard/create', 'ProductController@create')->name('add-product');

Route::post('admin-dashboard/store-city', 'CityController@store')->name('store-city');

Route::get('/admin-dashboard/arb', 'RentBikeController@create')->name('add-rent-bike');

Route::get('/admin-dashboard/bikes', 'HomeController@bikes')->name('bikes');

Route::get('admin-dashboard/edit-product/{product}', 'HomeController@editProduct')->name('edit-product');

Route::post('/admin-dashboard/update/{product}', 'HomeController@updateProduct')->name('update-product');

Route::delete('/admin-dashboard/delete/{product}', 'HomeController@deleteProduct')->name('delete-product');

Route::get('admin-dashboard/edit-rent-bike/{rentBike}', 'HomeController@editRentBike')->name('edit-rent-bike');

Route::post('admin-dashboard/update-rent-bike/{rentBike}', 'HomeController@updateRentBike')->name('update-rent-bike');

Route::delete('admin-dashboard/delete-rent-bike/{rentBike}', 'HomeController@deleteRentBike')->name('delete-rent-bike');

Route::get('/admin-dashboard/parts', 'HomeController@parts')->name('parts');

Route::get('/admin-dashboard/accessories', 'HomeController@accessories')->name('accessories');

Route::get('/admin-dashboard/rent-bikes', 'HomeController@rentBikes')->name('rent-bikes');

Route::get('/admin-dashboard/inventory', 'HomeController@inventory')->name('inventory');

Route::get('/admin-dashboard/users', 'HomeController@users')->name('users');

Route::post('/admin-dashboard', 'ProductController@store')->name('store-product');

Route::post('/admin-dashboard/asc', 'SubCategoryController@store')->name('add-sub-category');


