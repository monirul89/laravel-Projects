<?php

route::get('/',[
    'uses' => 'HealthPlusController@index',
    'as' => '/'
]);

route::get('/contact-us',[
    'uses' => 'HealthPlusController@contact',
    'as' => 'contact'
]);

route::get('/about-us',[
    'uses' => 'HealthPlusController@about',
    'as' => 'about'
]);

route::get('/appointment',[
    'uses' => 'HealthPlusController@appointment',
    'as' => 'appointment'
]);

route::get('/our-gallery',[
    'uses' => 'HealthPlusController@gallery',
    'as' => 'gallery'
]);

route::get('/our-gteam',[
    'uses' => 'HealthPlusController@team',
    'as' => 'team'
]);

route::get('/our-departments',[
    'uses' => 'HealthPlusController@departments',
    'as' => 'departments'
]);



route::get('/about/add',[
    'uses' => 'AboutController@addAbout',
    'as' => 'add-about'
]);


route::post('/save/about',[
    'uses' => 'AboutController@saveAbout',
    'as'=> 'save-about'
]);

route::get('/about/manage',[
    'uses' => 'AboutController@manageAbout',
    'as' => 'manage-about'
]);

route::get('/about/view/{id}',[
    'uses' => 'AboutController@viewAbout',
    'as' => 'view-about'
]);

Route::get('/about/manage/unpublished/{id}', [
    'uses' => 'AboutController@unpublishedAbout',
    'as' => 'unpublished-about'
]);

Route::get('/about/manage/published/{id}', [
    'uses' => 'AboutController@publishedAbout',
    'as' => 'published-about'
]);

Route::get('/manage/about/delete/{id}', [
    'uses' => 'AboutController@deleteAbout',
    'as' => 'delete-about'
]);

Route::get('/manage/about/edit/{id}', [
    'uses' => 'AboutController@editAbout',
    'as' => 'edit-about'
]);

Route::post('/manage/about/update/', [
    'uses' => 'AboutController@updateAbout',
    'as' => 'update-about'
]);



route::get('/add-slider',[
    'uses' => 'SliderController@addSlider',
    'as' => 'add-slider'
]);


route::post('/save-slider',[
    'uses' => 'SliderController@saveSlider',
    'as'=> 'save-slider'
]);

route::get('/manage-slider',[
    'uses' => 'SliderController@manageSlider',
    'as' => 'manage-slider'
]);


Route::get('/unpublished/slider/{id}', [
    'uses' => 'SliderController@unpublishedSlider',
    'as' => 'unpublished-slider'
]);

Route::get('/published/slider/{id}', [
    'uses' => 'SliderController@publishedSlider',
    'as' => 'published-slider'
]);

Route::get('/delete/slider/{id}', [
    'uses' => 'SliderController@deleteSlider',
    'as' => 'delete-slider'
]);

Route::get('/edit/slider/{id}', [
    'uses' => 'SliderController@editSlider',
    'as' => 'edit-slider'
]);

Route::post('/update/slider/', [
    'uses' => 'SliderController@updateSlider',
    'as' => 'update-slider'
]);


//Depertment



route::get('/add-department',[
    'uses' => 'DepartmentController@addDepartment',
    'as' => 'add-department'
]);


route::post('/save-department',[
    'uses' => 'DepartmentController@saveDepartment',
    'as'=> 'save-department'
]);

route::get('/manage-department',[
    'uses' => 'DepartmentController@manageDepartment',
    'as' => 'manage-department'
]);


Route::get('/unpublished/department/{id}', [
    'uses' => 'DepartmentController@unpublishedDepartment',
    'as' => 'unpublished-department'
]);

Route::get('/published/department/{id}', [
    'uses' => 'DepartmentController@publishedDepartment',
    'as' => 'published-department'
]);

Route::get('/delete/department/{id}', [
    'uses' => 'DepartmentController@deleteDepartment',
    'as' => 'delete-department'
]);

Route::get('edit/department/{id}', [
    'uses' => 'DepartmentController@editDepartment',
    'as' => 'edit-department'
]);

Route::post('/update/department/', [
    'uses' => 'DepartmentController@updateDepartment',
    'as' => 'update-department'
]);





//Team



route::get('/add-team',[
    'uses' => 'TeamController@addTeam',
    'as' => 'add-team'
]);


route::post('/save-team',[
    'uses' => 'TeamController@saveTeam',
    'as'=> 'save-team'
]);

route::get('/manage-team',[
    'uses' => 'TeamController@manageTeam',
    'as' => 'manage-team'
]);


Route::get('/unpublished-team/{id}', [
    'uses' => 'TeamController@unpublishedTeam',
    'as' => 'unpublished-team'
]);

Route::get('/published-team/{id}', [
    'uses' => 'TeamController@publishedTeam',
    'as' => 'published-team'
]);

Route::get('/delete-team/{id}', [
    'uses' => 'TeamController@deleteTeam',
    'as' => 'delete-team'
]);

Route::get('/edit-team/{id}', [
    'uses' => 'TeamController@editTeam',
    'as' => 'edit-team'
]);

Route::post('/update-team/', [
    'uses' => 'TeamController@updateTeam',
    'as' => 'update-team'
]);





//Best

route::get('/add-service',[
    'uses' => 'ServiceController@addService',
    'as' => 'add-service'
]);


route::post('/save-service',[
    'uses' => 'ServiceController@saveService',
    'as'=> 'save-service'
]);

route::get('/manage-service',[
    'uses' => 'ServiceController@manageService',
    'as' => 'manage-service'
]);


Route::get('/unpublished-service/{id}', [
    'uses' => 'ServiceController@unpublishedService',
    'as' => 'unpublished-service'
]);

Route::get('/published-service/{id}', [
    'uses' => 'ServiceController@publishedService',
    'as' => 'published-service'
]);

Route::get('/delete-service/{id}', [
    'uses' => 'ServiceController@deleteService',
    'as' => 'delete-service'
]);

Route::get('/edit-service/{id}', [
    'uses' => 'ServiceController@editService',
    'as' => 'edit-service'
]);

Route::post('/update-service/', [
    'uses' => 'ServiceController@updateService',
    'as' => 'update-service'
]);





//Welcome


route::get('/add-welcome',[
    'uses' => 'WelcomeController@addWelcome',
    'as' => 'add-welcome'
]);


route::post('/save-welcome',[
    'uses' => 'WelcomeController@saveWelcome',
    'as'=> 'save-welcome'
]);

route::get('/manage-welcome',[
    'uses' => 'WelcomeController@manageWelcome',
    'as' => 'manage-welcome'
]);


Route::get('/unpublished-welcome/{id}', [
    'uses' => 'WelcomeController@unpublishedWelcome',
    'as' => 'unpublished-welcome'
]);

Route::get('/published-welcome/{id}', [
    'uses' => 'WelcomeController@publishedWelcome',
    'as' => 'published-welcome'
]);

Route::get('/delete-welcome/{id}', [
    'uses' => 'WelcomeController@deleteWelcome',
    'as' => 'delete-welcome'
]);

Route::get('/edit-welcome/{id}', [
    'uses' => 'WelcomeController@editWelcome',
    'as' => 'edit-welcome'
]);

Route::post('/update-welcome/', [
    'uses' => 'WelcomeController@updateWelcome',
    'as' => 'update-welcome'
]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


