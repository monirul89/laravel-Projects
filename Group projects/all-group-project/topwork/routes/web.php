<?php

Route::get('/',[
    'uses'=>'TopworkController@index',
    'as'=>'/'
]);

Route::get('/home',[
    'uses'=>'TopworkController@index',
    'as'=>'home'
]);

//For-blog

Route::get('/blog',[
    'uses'  =>'TopworkController@blog',
    'as'    =>'blog-page'
]);

//For-contact-page

Route::get('/contact',[
    'uses'  =>'TopworkController@contact',
    'as'    =>'contact-page'
]);

//For Candidates
Route::get('/resume/add',[
    'uses'  =>'CandidateController@addResumeCandidates',
    'as'    =>'add-resume'
]);

Route::get('/browse/jobs',[
    'uses'  =>'CandidateController@index',
    'as'    =>'browse-jobs'
]);
Route::get('/resume/new',[
    'uses'  =>'CandidateController@newResume',
    'as'    =>'add-resume'
]);

Route::get('/resume/update/{id}',[
    'uses'  =>'CandidateController@updateResume',
    'as'    =>'update-resume'
]);

Route::post('/profile/update',[
    'uses'  =>'CandidateController@updateprofile',
    'as'    =>'update-profile'
]);



Route::get('/browse/job',[
    'uses'  =>'CandidateController@browsejobCandidates',
    'as'    =>'browse-job'
]);

Route::get('/manage/resume',[
    'uses'  =>'CandidateController@managesJobCandidates',
    'as'    =>'manage-resume'
]);
Route::get('/category/browse',[
    'uses'  =>'CandidateController@browsingCategory',
    'as'    =>'browsing-category'
]);








Route::get('/browse/categories',[
    'uses'  =>'CandidateController@browseCategories',
    'as'    =>'browse-categories'
]);

Route::get('/resume/manage',[
    'uses'  =>'CandidateController@manageResumeCandidates',
    'as'    =>'manage-resumes'
]);

Route::get('/alerts/job',[
    'uses'  =>'CandidateController@jobAlertsCandidates',
    'as'    =>'job-alerts'
]);
Route::post('/profile/save',[
    'uses'  =>'CandidateController@saveProfileCandidates',
    'as'    =>'save-profile'
]);

Route::get('/resume/unpublished/{id}',[
    'uses' => 'ManageController@unpublishedResume',
    'as' => 'unpublished-resume'
]);

Route::get('/resume/published/{id}',[
    'uses' => 'ManageController@publishedResume',
    'as' => 'published-resume'
]);




//For-employee
Route::get('/job/add',[
    'uses'  =>'TopworkController@addJob',
    'as'    =>'add-job'
]);

Route::get('/job/manage',[
    'uses'  =>'EmployersController@manageJob',
    'as'    =>'manage-jobs'
]);
Route::get('/job/applications',[
    'uses'  =>'EmployersController@applicationsJob',
    'as'    =>'manage-applications'
]);
Route::get('/browse/resumes',[
    'uses'  =>'EmployersController@browseJob',
    'as'    =>'browse-resumes'
]);

//For pages
Route::get('/page/job',[
    'uses'  =>'JobPageController@jobPage',
    'as'    =>'job-page'
]);
Route::get('/page/job/alt',[
    'uses'  =>'JobPageController@pageAltPage',
    'as'    =>'job-page-alt'
]);

Route::get('/page/resume',[
    'uses'  =>'JobPageController@resumePage',
    'as'    =>'resume-page'
]);

Route::get('/page/shortcodes',[
    'uses'  =>'JobPageController@shortcodesPage',
    'as'    =>'shortcodes'
]);
Route::get('/page/icons',[
    'uses'  =>'JobPageController@iconsPage',
    'as'    =>'icons'
]);
Route::get('/pricing/tables',[
    'uses'  =>'JobPageController@pricingTablesPage',
    'as'    =>'pricing-tables'
]);


//Jobs page
Route::get('/slider/add',[
    'uses'  =>'SliderController@newSlider',
    'as'    =>'add-slider'
]);
Route::get('/manage/slider',[
    'uses'  =>'SliderController@manageSlider',
    'as'    =>'manage-slider'
]);


//Jobs page
Route::get('/job/new',[
    'uses'  =>'JobPageController@newJobEmployee',
    'as'    =>'new-job'
]);
Route::get('/manages/job',[
    'uses'  =>'JobPageController@managesJobEmployee',
    'as'    =>'manages-job'
]);
Route::get('/manage/app',[
    'uses'  =>'JobPageController@appManageEmployee',
    'as'    =>'app-manage'
]);
Route::get('/resume/browse',[
    'uses'  =>'JobPageController@browseResumeEmployee',
    'as'    =>'browse-resume'
]);
Route::get('/resume/manage',[
    'uses'  =>'JobPageController@manageResumeEmployee',
    'as'    =>'manage-resume'
]);
Route::get('/cancel',[
    'uses'  =>'ManageController@manageCancel',
    'as'    =>'cancel'
]);
Route::post('/job/new',[
    'uses'  =>'ServiceController@newJob',
    'as'    =>'new-job'
]);

Route::get('/job/manage',[
    'uses'  =>'ManageController@manageJob',
    'as'    =>'manage-job'
]);



Route::get('/job/unpublished/{id}',[
    'uses' => 'ManageController@unpublishedJob',
    'as' => 'unpublished-job'
]);

Route::get('/job/published/{id}',[
    'uses' => 'ManageController@publishedJob',
    'as' => 'published-job'
]);

Route::get('/job/details/{id}',[
    'uses' => 'ServiceController@jobDetails',
    'as' => 'job-details'
]);












Auth::routes();

Route::get('/home',[
    'uses'  =>'HomeController@index',
    'as'    =>'home'
]);


