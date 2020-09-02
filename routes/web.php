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

// Route::get('/', function () {
//     return view('welcome');
// });
//front
Route::get('/', 'PageController@mainfun')->name('mainpage');

Route::get('loginform', 'PageController@loginfun')->name('loginpage');

Route::get('registerform', 'PageController@registerfun')->name('registerpage');

Route::get('promotion', 'PageController@promotionfun')->name('promotionpage');

Route::get('shoppingcart', 'PageController@shoppingcartfun')->name('shoppingcartpage');

Route::get('brand', 'PageController@brandfun')->name('brandpage');

Route::get('subcategory', 'PageController@subcategoryfun')->name('subcategorypage');

Route::get('itemdetail', 'PageController@itemdetailfun')->name('itemdetailpage');


//backend
Route::middleware('role:Admin')->group(function () {
    Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');

	Route::resource('items','ItemController');
});

	Route::resource('brands','BrandController');

	Route::resource('categories','CategoryController');

	Route::resource('subcategories','SubcategoryController');

	Route::resource('orders','OrderController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
