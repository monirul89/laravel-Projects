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

Route::get('/',[
    'uses'  => 'PortfolioController@index',
    'as'    => '/'
]);

Route::get('/about',[
    'uses'  => 'PortfolioController@about',
    'as'    => 'about'
]);

Route::get('/services',[
    'uses'  => 'PortfolioController@services',
    'as'    => 'services'
]);

Route::get('/error',[
    'uses'  => 'PortfolioController@error',
    'as'    => 'error'
]);

Route::get('/gallery',[
    'uses'  => 'PortfolioController@gallery',
    'as'    => 'gallery'
]);

Route::get('/blog-full-width',[
    'uses'  => 'PortfolioController@blogFullWidth',
    'as'    => 'blog-full'
]);

Route::get('/blog-left-sidebar',[
    'uses'  => 'PortfolioController@blogLeftSidebar',
    'as'    => 'blog-left'
]);

Route::get('/blog-right-sidebar',[
    'uses'  => 'PortfolioController@blogRightSidebar',
    'as'    => 'blog-right'
]);

Route::get('/contact',[
    'uses'  => 'PortfolioController@contactMe',
    'as'    => 'contact'
]);

Route::get('/single-project/{id}',[
    'uses'  => 'PortfolioController@singleProject',
    'as'    => 'single'
]);

Route::get('/single-post',[
    'uses'  => 'PortfolioController@singlePost',
    'as'    => 'post'
]);

//Basic Auth

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Start ABOUT Me

Route::get('/about/me', [
    'uses' => 'AboutController@showAbout',
    'as' => 'about-me'
]);
Route::post('/update/about', [
    'uses' => 'AboutController@updateAbout',
    'as' => 'update-about'
]);
//End ABOUT Me

//Add and Manage Service

Route::get('/service/add-service',[
    'uses'  => 'ServiceController@index',
    'as'    => 'add-service'
]);

Route::post('/service/save-service',[
    'uses'  => 'ServiceController@saveService',
    'as'    => 'new-service'
]);

Route::get('/service/manage-service',[
    'uses'  => 'ServiceController@manageService',
    'as'    => 'manage-service'
]);

Route::get('/service/unpublished/{id}',[
    'uses'  => 'ServiceController@unpublishedService',
    'as'    => 'unpublished-service'
]);

Route::get('/service/published/{id}',[
    'uses'  => 'ServiceController@publishedService',
    'as'    => 'published-service'
]);

Route::get('/service/edit/{id}',[
    'uses'  => 'ServiceController@editService',
    'as'    => 'edit-service'
]);

Route::post('/service/update',[
    'uses'  => 'ServiceController@updateService',
    'as'    => 'update-service'
]);

Route::get('/service/delete/{id}',[
    'uses'  => 'ServiceController@deleteService',
    'as'    => 'delete-service'
]);

//Add and Manage Project

Route::get('/project/add-project',[
    'uses'  => 'ProjectController@index',
    'as'    => 'add-project'
]);

Route::post('/project/save-project',[
    'uses'  => 'ProjectController@saveProject',
    'as'    => 'new-project'
]);

Route::get('/project/manage-project',[
    'uses'  => 'ProjectController@manageProject',
    'as'    => 'manage-project'
]);

Route::get('/project/view/{id}',[
    'uses'=>'ProjectController@viewProject',
    'as'  =>'view-project'
]);

Route::get('/project/unpublished/{id}',[
    'uses'  => 'ProjectController@unpublishedProject',
    'as'    => 'unpublished-project'
]);

Route::get('/project/published/{id}',[
    'uses'  => 'ProjectController@publishedProject',
    'as'    => 'published-project'
]);

Route::get('/project/edit/{id}',[
    'uses'  => 'ProjectController@editProject',
    'as'    => 'edit-project'
]);

Route::post('/project/update',[
    'uses'  => 'ProjectController@updateProject',
    'as'    => 'update-project'
]);

Route::get('/project/delete/{id}',[
    'uses'  => 'ProjectController@deleteProject',
    'as'    => 'delete-project'
]);


