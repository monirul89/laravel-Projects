<?php


Route::get('/',[
    'uses' => 'portfolioController@index',
    'as' => '/'
]);

Route::get('about-us',[
    'uses' => 'portfolioController@aboutUs',
    'as' => 'about-us'
]);

Route::get('projects',[
    'uses'  => 'portfolioController@projects',
    'as'    => 'projects'
]);

Route::get('gallery',[
    'uses' => 'portfolioController@gallery',
    'as' => 'gallery'
]);
Route::get('contact-us',[
    'uses' => 'portfolioController@contactUs',
    'as' => 'contact'
]);

Route::get('add-content',[
    'uses' => 'addContentController@addContent',
    'as' => 'add-content'
]);

Route::post('save-content',[
    'uses' => 'addContentController@saveContent',
    'as' => 'save-content'
]);

Route::get('/manage/content',[
    'uses' => 'addContentController@manageContent',
    'as' => 'manage-content'
]);
Route::get('/content/unpublished/{id}',[
    'uses' => 'addContentController@unpublishedHomeContent',
    'as' => 'unpublished-home-content'
]);
Route::get('/content/published/{id}',[
    'uses' => 'addContentController@publishedHomeContent',
    'as' => 'published-home-content'
]);

Route::get('content/edit/vission/{id}',[
    'uses' => 'addContentController@editVissionContent',
    'as' => 'edit-vission'
]);
Route::get('content/edit/mission/{id}',[
    'uses' => 'addContentController@editMissionContent',
    'as' => 'edit-mission'
]);
Route::get('content/edit/goal/{id}',[
    'uses' => 'addContentController@editGoalContent',
    'as' => 'edit-goal'
]);














Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('home');
