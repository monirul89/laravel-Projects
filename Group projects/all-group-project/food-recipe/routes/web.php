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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Start Food Recipre
Route::get('/', [
    'uses' => 'foodRecipeController@index',
    'as' => '/'
]);
Route::get('/about-us', [
    'uses' => 'foodRecipeController@aboutUs',
    'as' => 'about'
]);
Route::get('/services', [
    'uses' => 'foodRecipeController@services',
    'as' => 'services'
]);
Route::get('/gallery', [
    'uses' => 'foodRecipeController@gallery',
    'as' => 'gallery'
]);
Route::get('/contact-us', [
    'uses' => 'foodRecipeController@contactUs',
    'as' => 'contact'
]);
//End Food Recipre

//Start Category
Route::get('category/add', [
    'uses' => 'CategoryController@addCategory',
    'as' => 'add-category'
]);

Route::post('/category/save', [
    'uses' => 'CategoryController@saveCategory',
    'as' => 'save-category'
]);

Route::get('/category/manage', [
    'uses' => 'CategoryController@manageCategory',
    'as' => 'manage-category'
]);
Route::post('/category/save', [
    'uses' => 'CategoryController@saveCategory',
    'as' => 'new-category'
]);
Route::get('/category/unpublished/{id}', [
    'uses' => 'CategoryController@unpublishedCategory',
    'as' => 'unpublished-category'
]);
Route::get('/category/published/{id}', [
    'uses' => 'CategoryController@publishedCategory',
    'as' => 'published-category'
]);
Route::get('/category/edit/{id}', [
    'uses' => 'CategoryController@editCategory',
    'as' => 'edit-category'
]);
Route::post('/category/update', [
    'uses' => 'CategoryController@updateCategory',
    'as' => 'update-category'
]);
Route::get('/category/delete/{id}', [
    'uses' => 'CategoryController@deleteCategory',
    'as' => 'delete-category'
]);
//End Category

//Start Food
Route::get('food/add', [
    'uses' => 'FoodController@index',
    'as' => 'add-food'
]);
Route::post('/food/save', [
    'uses' => 'FoodController@saveFood',
    'as' => 'new-food'
]);

Route::get('/food/manage', [
    'uses' => 'FoodController@manageFood',
    'as' => 'manage-food'
]);
Route::get('/food/view/{id}', [
    'uses' => 'FoodController@viewFoodDetails',
    'as' => 'view-food'
]);
Route::get('/food/unpublished/{id}', [
    'uses' => 'FoodController@unpublishedFood',
    'as' => 'unpublished-food'
]);
Route::get('/food/published/{id}', [
    'uses' => 'FoodController@publishedFood',
    'as' => 'published-food'
]);
Route::get('/food/edit/{id}', [
    'uses' => 'FoodController@editFood',
    'as' => 'edit-food'
]);
Route::post('/food/update', [
    'uses' => 'FoodController@updateFood',
    'as' => 'update-food'
]);
Route::get('/food/delete/{id}', [
    'uses' => 'FoodController@deleteFood',
    'as' => 'delete-food'
]);
//End Food

//Start Service
Route::get('service/add', [
    'uses' => 'ServiceController@addService',
    'as' => 'add-service'
]);

Route::post('/service/save', [
    'uses' => 'ServiceController@saveService',
    'as' => 'save-service'
]);

Route::get('/service/manage', [
    'uses' => 'ServiceController@manageService',
    'as' => 'manage-service'
]);
Route::post('/service/save', [
    'uses' => 'ServiceController@saveService',
    'as' => 'new-service'
]);
Route::get('/service/unpublished/{id}', [
    'uses' => 'ServiceController@unpublishedService',
    'as' => 'unpublished-service'
]);
Route::get('/service/published/{id}', [
    'uses' => 'ServiceController@publishedService',
    'as' => 'published-service'
]);
Route::get('/service/edit/{id}', [
    'uses' => 'ServiceController@editService',
    'as' => 'edit-service'
]);
Route::post('/service/update', [
    'uses' => 'ServiceController@updateService',
    'as' => 'update-service'
]);
Route::get('/service/delete/{id}', [
    'uses' => 'ServiceController@deleteService',
    'as' => 'delete-service'
]);
//End Service
//
///
///  //Start ABOUT US

Route::get('/about/us/', [
    'uses' => 'AboutController@showAbout',
    'as' => 'about-us'
]);
Route::post('/update/about/', [
    'uses' => 'AboutController@updateAbout',
    'as' => 'update-about'
]);
//End ABOUT US
//
/// //Start Contact

Route::get('/contact/us/', [
    'uses' => 'ContactController@showContact',
    'as' => 'contact-us'
]);
Route::post('/update/contact/', [
    'uses' => 'ContactController@updateConatct',
    'as' => 'update-contact'
]);
//End Contact



////Start Food
//Route::get('food/add', [
//    'uses' => 'FoodController@index',
//    'as' => 'add-food'
//]);
//Route::post('/food/save', [
//    'uses' => 'FoodController@saveFood',
//    'as' => 'new-food'
//]);
//
//Route::get('/food/manage', [
//    'uses' => 'FoodController@manageFood',
//    'as' => 'manage-food'
//]);
//Route::get('/food/view/{id}', [
//    'uses' => 'FoodController@viewFoodDetails',
//    'as' => 'view-food'
//]);
//Route::get('/food/unpublished/{id}', [
//    'uses' => 'FoodController@unpublishedFood',
//    'as' => 'unpublished-food'
//]);
//Route::get('/food/published/{id}', [
//    'uses' => 'FoodController@publishedFood',
//    'as' => 'published-food'
//]);
//Route::get('/food/edit/{id}', [
//    'uses' => 'FoodController@editFood',
//    'as' => 'edit-food'
//]);
//Route::post('/food/update', [
//    'uses' => 'FoodController@updateFood',
//    'as' => 'update-food'
//]);
//Route::get('/food/delete/{id}', [
//    'uses' => 'FoodController@deleteFood',
//    'as' => 'delete-food'
//]);
////End Service
//
