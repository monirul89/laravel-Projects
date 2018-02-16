<?php

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');


Route::get('/',[
   'uses'=>'InfluencingQuotesController@index',
   'as'=>'/'
]);

Route::get('/contact-us',[
   'uses'=>'InfluencingQuotesController@contactUs',
   'as'=>'contact-us'
]);

Route::get('/admin/add-category',[
   'uses'=>'CategoryController@index',
   'as'=>'add-category'
]);
Route::get('/admin/manage-categories',[
   'uses'=>'CategoryController@manageCategory',
   'as'=>'manage-categories'
]);

Route::get('/admin/add-author',[
    'uses'=>'AuthorController@index',
    'as'=>'add-author'
]);

Route::get('/admin/manage-authors',[
    'uses'=>'AuthorController@manageAuthor',
    'as'=>'manage-authors'
]);

Route::get('/admin/add-quote',[
    'uses'=>'QuoteController@index',
    'as'=>'add-quote'
]);

Route::get('/admin/manage-quotes',[
    'uses'=>'QuoteController@manageQuote',
    'as'=>'manage-quotes'
]);

Route::post('/admin/add-new-category', [
    'uses' => 'CategoryController@addNewCategory',
    'as' => 'add-new-category'
]);

Route::post('/admin/add-new-author', [
    'uses' => 'AuthorController@addNewAuthor',
    'as' => 'add-new-author'
]);

Route::get('/admin/manage-categories/unpublished/{id}', [
    'uses'=>'CategoryController@unpublishedCategory',
    'as'=>'unpublished-category'
]);
Route::get('/admin/manage-categories/published/{id}', [
    'uses'=>'CategoryController@publishedCategory',
    'as'=>'published-category'
]);

Route::get('/admin/category/edit-category/{id}', [
    'uses'=>'CategoryController@editCategory',
    'as'=>'edit-category'
]);

Route::post('/admin/category/update-category', [
    'uses' => 'CategoryController@updateCategory',
    'as' => 'update-category'
]);

Route::get('/admin/category/delete-category/{id}', [
    'uses'=>'CategoryController@deleteCategory',
    'as'=>'delete-category'
]);

Route::get('/admin/manage-authors/unpublished/{id}', [
    'uses' => 'AuthorController@unpublishedAuthor',
    'as' => 'unpublished-author'
]);
Route::get('/admin/manage-authors/published/{id}', [
    'uses' => 'AuthorController@publishedAuthor',
    'as' => 'published-author'
]);

Route::get('/admin/manage-authors/update-author/{id}', [
    'uses' => 'AuthorController@editAuthor',
    'as' => 'edit-author'
]);

Route::get('/admin/manage-authors/delete/{id}', [
    'uses' => 'AuthorController@deleteAuthor',
    'as' => 'delete-author'
]);

Route::post('/admin/manage-authors/save-updated-author', [
    'uses' => 'AuthorController@updateAuthor',
    'as' => 'save-author'
]);

Route::post('/admin/save-new-quote', [
    'uses' => 'QuoteController@saveNewQuote',
    'as' => 'save-new-quote'
]);

Route::get('/admin/manage-quotes/unpublished/{id}', [
    'uses' => 'QuoteController@unpublishedQuote',
    'as' => 'unpublished-quote'
]);
Route::get('/admin/manage-quotes/published/{id}', [
    'uses' => 'QuoteController@publishedQuote',
    'as' => 'published-quote'
]);

Route::get('/admin/manage-quotes/delete/{id}', [
    'uses' => 'QuoteController@deleteQuote',
    'as' => 'delete-quote'
]);

Route::get('/admin/manage-quotes/{id}', [
    'uses' => 'QuoteController@viewQuote',
    'as' => 'view-quote'
]);

Route::get('/admin/back-to-manage-quotes/', [
    'uses' => 'QuoteController@backToManageQuote',
    'as' => 'back'
]);

Route::get('/admin/manage-quotes/update-quote/{id}', [
    'uses' => 'QuoteController@editQuote',
    'as' => 'edit-quote'
]);

Route::post('/admin/manage-quotes/update-quote', [
    'uses' => 'QuoteController@updateQuote',
    'as' => 'modify-quote'
]);

