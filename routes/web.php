<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/login','HomeController@login')->name('login');
Route::get('/','HomeController@index')->name('home');
Route::get('/showroom','HomeController@showroom')->name('showroom');
Route::get('/about-us','HomeController@about_us')->name('about-us');
Route::get('/service','HomeController@service')->name('service');
Route::get('/reviews','HomeController@reviews')->name('reviews');
Route::get('/contact-us','HomeController@contact_us')->name('contact-us');
Route::get('/frequently-asked-questions','HomeController@faq')->name('faq');
Route::get('/blog','HomeController@blog')->name('blog');
Route::get('/special-doors-deals','HomeController@special_offers')->name('special_offers');

Route::get('/external-bfold/{id?}','HomeController@external_bfold')->name('External Bifold Doors');
Route::get('/external-french/{id?}','HomeController@external_french')->name('External French Doors');
Route::get('/internal/{id?}','HomeController@internal')->name('Internal Doors');
Route::get('/internal-bfold/{id?}','HomeController@internal_bfold')->name('Internal Bifold Doors');
Route::get('/internal-french/{id?}','HomeController@internal_french')->name('Internal French Doors');
Route::get('/external/{id?}','HomeController@external')->name('External Doors');
Route::get('/door-frame/{id?}','HomeController@door_frame')->name('Door Frames, Mouldings & Hardware');
Route::get('/sliding-door/{id?}','HomeController@sliding_door')->name('Sliding Doors');
Route::get('/patio-door/{id?}','HomeController@patio')->name('patio_door');

Route::get('/external-front-door','HomeController@external_front')->name('External Front Doors');

Route::get('/external-back-door','HomeController@external_back')->name('External Back Doors');

Route::get('/prdoduct-detail/{id?}','HomeController@detail')->name('detail');

Route::post('/intent','StripPaymentController@intent')->name('intent');
Route::get('cart', 'ProductController@cart')->name('cart');
Route::post('product/save', 'ProductController@save')->name('product.save');
Route::get('product/delete/{id?}', 'ProductController@delete')->name('product.delete');
Route::get('product/counter', 'ProductController@counter')->name('product.counter');
Route::patch('update-cart', 'ProductController@update')->name('update.cart');
Route::delete('remove-from-cart', 'ProductController@remove')->name('remove.from.cart');
Route::get('checkout', 'ProductController@checkout')->name('product.checkout');
Route::post('checkout/save', 'ProductController@checkoutSave')->name('checkout.save');
Route::get('order/{id?}', 'ProductController@order')->name('checkout.order');
Route::post('confirm/payment', 'ProductController@payment')->name('confirm.payment');

Route::middleware(['admin'])->group(function () {
	Route::name('admin.')->prefix('admin')->namespace('Admin')->group(function() {
    	Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    	Route::get('profile', 'AdminController@profile')->name('profile');
	    Route::post('general-update', 'AdminController@generalupdate')->name('general.update');
	    Route::post('pass-update', 'AdminController@passupdate')->name('pass.update');

		Route::name('category.')->prefix('category')->group(function () {
	        Route::get('list', 'CategoryController@index')->name('list');
	        Route::get('add', 'CategoryController@add')->name('add');
	        Route::post('save', 'CategoryController@save')->name('save');
	        Route::get('edit/{id?}', 'CategoryController@edit')->name('edit');
	        Route::get('delete/{id?}', 'CategoryController@delete')->name('delete');
	    });
	    Route::name('subcategory.')->prefix('subcategory')->group(function () {
	        Route::get('list', 'SubCategoryController@index')->name('list');
	        Route::get('add', 'SubCategoryController@add')->name('add');
	        Route::post('save', 'SubCategoryController@save')->name('save');
	        Route::get('edit/{id?}', 'SubCategoryController@edit')->name('edit');
	        Route::get('delete/{id?}', 'SubCategoryController@delete')->name('delete');
	    });
	});
});