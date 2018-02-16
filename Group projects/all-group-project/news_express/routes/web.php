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

route::get('/',[
    'uses' => 'ExpressNewsController@index',
    'as' => '/'
]);

route::get('/news/category-news/{id}',[
    'uses' => 'ExpressNewsController@categoryNews',
    'as' => 'category-news'
]);

route::get('/contact-us',[
    'uses' => 'ExpressNewsController@contact',
    'as' => 'contact'
]);
route::get('/about-us',[
    'uses' => 'ExpressNewsController@about',
    'as' => 'about'
]);
route::get('/privacy-policy',[
    'uses' => 'ExpressNewsController@privacyPolicy',
    'as' => 'privacy-policy'
]);
route::get('/view-details/{id}',[
    'uses' => 'ExpressNewsController@singleView',
    'as' => 'single-view'
]);





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Category Info

Route::get('/category/add-category',[
    'uses'  => 'CategoryController@index',
    'as'    => 'add-category'
]);

Route::get('/category/manage-category',[
    'uses'  => 'CategoryController@manageCategory',
    'as'    => 'manage-category'
]);

Route::post('/category/save-category',[
    'uses'  => 'CategoryController@saveCategory',
    'as'    => 'save-category'
]);

Route::get('/category/unpublished/{id}',[
    'uses'  => 'CategoryController@unpublishedCategory',
    'as'    => 'unpublished-category'
]);

Route::get('/category/published/{id}',[
    'uses'  => 'CategoryController@publishedCategory',
    'as'    => 'published-category'
]);

Route::get('/category/edit/{id}',[
    'uses'  => 'CategoryController@editCategory',
    'as'    => 'edit-category'
]);

Route::post('/category/update',[
    'uses'  => 'CategoryController@updateCategory',
    'as'    => 'update-category'
]);

Route::get('/category/delete/{id}',[
    'uses'  => 'CategoryController@deleteCategory',
    'as'    => 'delete-category'
]);


//Sub Category Info

Route::get('/sub-category/add-sub-category',[
    'uses'  => 'SubCategoryController@index',
    'as'    => 'add-sub-category'
]);

Route::get('/sub-category/manage-sub-category',[
    'uses'  => 'SubCategoryController@manageSubCategory',
    'as'    => 'manage-sub-category'
]);

Route::post('/sub-category/save-sub-category',[
    'uses'  => 'SubCategoryController@saveSubCategory',
    'as'    => 'save-sub-category'
]);

Route::get('/sub-category/unpublished/{id}',[
    'uses'  => 'SubCategoryController@unpublishedSubCategory',
    'as'    => 'unpublished-sub-category'
]);

Route::get('/sub-category/published/{id}',[
    'uses'  => 'SubCategoryController@publishedSubCategory',
    'as'    => 'published-sub-category'
]);

Route::get('/sub-category/edit/{id}',[
    'uses'  => 'SubCategoryController@editSubCategory',
    'as'    => 'edit-sub-category'
]);

Route::post('/sub-category/update',[
    'uses'  => 'SubCategoryController@updateSubCategory',
    'as'    => 'update-sub-category'
]);

Route::get('/sub-category/delete/{id}',[
    'uses'  => 'SubCategoryController@deleteSubCategory',
    'as'    => 'delete-sub-category'
]);


//News Info

Route::get('/news/add-news',[
    'uses'  => 'NewsController@index',
    'as'    => 'add-news'
]);

Route::get('/news/manage-news',[
    'uses'  => 'NewsController@manageNews',
    'as'    => 'manage-news'
]);

Route::post('/news/save-news',[
    'uses'  => 'NewsController@saveNews',
    'as'    => 'save-news'
]);
Route::get('/news/remove-breaking-news/{id}',[
    'uses'  => 'NewsController@removeBreakingNews',
    'as'    => 'remove-breaking-news'
]);

Route::get('/news/make-breaking-news/{id}',[
    'uses'  => 'NewsController@makeBreakingNews',
    'as'    => 'make-breaking-news'
]);

Route::get('/news/unpublished/{id}',[
    'uses'  => 'NewsController@unpublishedNews',
    'as'    => 'unpublished-news'
]);

Route::get('/news/published/{id}',[
    'uses'  => 'NewsController@publishedNews',
    'as'    => 'published-news'
]);

Route::get('/news/edit/{id}',[
    'uses'  => 'NewsController@editNews',
    'as'    => 'edit-news'
]);
Route::get('/news/view-details/{id}',[
    'uses'  => 'NewsController@viewNews',
    'as'    => 'view-news'
]);

Route::post('/news/update',[
    'uses'  => 'NewsController@updateNews',
    'as'    => 'update-news'
]);

Route::get('/news/delete/{id}',[
    'uses'  => 'NewsController@deleteNews',
    'as'    => 'delete-news'
]);

//Gallery

Route::get('/add-gallery',[
    'uses' => 'GalleryController@addGallery',
    'as' => 'add-gallery'
]);


Route::post('/save-gallery',[
    'uses' => 'GalleryController@saveGallery',
    'as'=> 'save-gallery'
]);

Route::get('/manage-gallery',[
    'uses' => 'GalleryController@manageGallery',
    'as' => 'manage-gallery'
]);


Route::get('/unpublished/gallery/{id}', [
    'uses' => 'GalleryController@unpublishedGallery',
    'as' => 'unpublished-gallery'
]);

Route::get('/published/gallery/{id}', [
    'uses' => 'GalleryController@publishedGallery',
    'as' => 'published-gallery'
]);

Route::get('/delete/gallery/{id}', [
    'uses' => 'GalleryController@deleteGallery',
    'as' => 'delete-gallery'
]);

Route::get('/edit/gallery/{id}', [
    'uses' => 'GalleryController@editGallery',
    'as' => 'edit-gallery'
]);

Route::post('/update/gallery/', [
    'uses' => 'GalleryController@updateGallery',
    'as' => 'update-gallery'
]);