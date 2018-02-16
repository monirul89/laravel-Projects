<?php

Route ::get('/',[
    'uses' =>'AmarNewsController@index',
    'as'   =>  '/'
]);

Route ::get('/sports-news',[
    'uses' =>'AmarNewsController@sportsNews',
    'as'   =>  'sports-news'
]);

Route ::get('/news-details',[
    'uses' =>'AmarNewsController@detailsNews',
    'as'   =>  'news-details'
]);

Route ::get('/news-category',[
    'uses' =>'NewsCategoryController@index',
    'as'   =>  'add-category'
]);

Route ::post('/save-category',[
    'uses' =>'NewsCategoryController@saveCategory',
    'as'   =>  'new-category'
]);


Route ::get('/manage-news-category',[
    'uses' =>'NewsCategoryController@manageNews',
    'as'   =>  'manage-category'
]);

Route::get('/category/unpublished/{id}',[
    'uses'=>'NewsCategoryController@unpublishedCategory',
    'as'=> 'unpublished-category'
]);



Route::get('/category/published/{id}',[

    'uses'=>'NewsCategoryController@publishedCategory',
    'as'=> 'published-category'
]);

Route::get('/category/edit/{id}',[

    'uses'=>'NewsCategoryController@editCategory',
    'as'=> 'edit-category'
]);

Route::post('/category/update',[
    'uses'=>'NewsCategoryController@updateCategory',
    'as'=> 'update-category'
]);

Route::get('/category/delete/{id}',[
    'uses'=>'NewsCategoryController@deleteCategory',
    'as'=> 'delete-category'
]);

Route::get('/add-sub-category',[
    'uses'=>'SubNewsCategoryController@addSubCategory',
    'as'=> 'add-sub-category'
]);

Route::get('/manage/sub-category',[
    'uses'=>'SubNewsCategoryController@manageSubCategory',
    'as'=> 'manage-sub-category'
]);

Route ::post('/save-sub-category',[
    'uses' =>'SubNewsCategoryController@saveSubCategory',
    'as'   =>  'new-sub-category'
]);

Route::get('/sub-category/unpublished/{id}',[

    'uses'=>'SubNewsCategoryController@unpublishedSubCategory',
    'as'=> 'unpublished-sub-category'
]);

Route::get('/sub-category/published/{id}',[

    'uses'=>'SubNewsCategoryController@publishedSubCategory',
    'as'=> 'published-sub-category'
]);

Route::get('/sub-category/edit/{id}',[

    'uses'=>'SubNewsCategoryController@editSubCategory',
    'as'=> 'edit-sub-category'
]);

Route::post('/update/sub-category',[

    'uses'=>'SubNewsCategoryController@updateSubCategory',
    'as'=> 'update-sub-category'
]);

Route::get('/sub-category/delete/{id}',[

    'uses'=>'SubNewsCategoryController@deleteSubCategory',
    'as'=> 'delete-sub-category'
]);


Route::get('/news/add',[

    'uses'=>'NewsController@addNews',
    'as'=> 'add-news'
]);

Route::post('/news/save',[

    'uses'=>'NewsController@saveNews',
    'as'=> 'new-news'
]);

Route::get('/news/manage',[

    'uses'=>'NewsController@manageNews',
    'as'=> 'manage-news'
]);

Route::get('/news/manage',[

    'uses'=>'NewsController@manageNews',
    'as'=> 'manage-news'
]);

Route::get('/news/details/{id}',[
    'uses'=>'NewsController@viewDetails',
    'as'=> 'view-news-details'
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

Route::post('/news/update/',[
    'uses'  => 'NewsController@updateNews',
    'as'    => 'update-news'
]);

Route::get('/news/delete/{id}',[
    'uses'  => 'NewsController@deleteNews',
    'as'    => 'delete-news'
]);

Route::get('/news/category-news',[
    'uses'  => 'amarNewsController@categoryNews',
    'as'    => 'category-news'
]);













Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

