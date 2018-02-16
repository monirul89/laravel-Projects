<?php

Route::get('/',[
   'uses' => 'VarsityController@index',
    'as' => '/'
]);

Route::get('/course-archive',[
    'uses' => 'VarsityController@course',
    'as' => 'course'
]);

Route::get('/course/course-single/{id}',[
    'uses' => 'VarsityController@courseSingle',
    'as' => 'course-single'
]);

Route::get('/events-archived',[
    'uses' => 'VarsityController@events',
    'as' => 'events'
]);

Route::get('/events/event-single/{id}',[
    'uses' => 'VarsityController@eventSingle',
    'as' => 'event-single'
]);

Route::get('/gallery',[
    'uses' => 'VarsityController@gallery',
    'as' => 'gallery'
]);

Route::get('/blog-archived',[
    'uses' => 'VarsityController@blog',
    'as' => 'blog'
]);

Route::get('/blog/blog-single/{id}',[
    'uses' => 'VarsityController@blogSingle',
    'as' => 'blog-single'
]);

Route::get('/404',[
    'uses' => 'VarsityController@error404',
    'as' => '404'
]);

Route::get('/contact-us',[
    'uses' => 'VarsityController@contact',
    'as' => 'contact'
]);


Auth::Routes();

Route::get('/home', 'HomeController@index')->name('home');

//Teacher info

Route::get('/add-teacher',[
    'uses' => 'TeacherController@index',
    'as' => 'add-teacher'
]);
Route::get('/manage-teacher',[
    'uses' => 'TeacherController@manageTeacher',
    'as' => 'manage-teacher'
]);
Route::post('/teacher-info/save',[
    'uses' => 'TeacherController@saveTeacher',
    'as' => 'save-teacher'
]);
Route::get('/teacher-info/unpublished-teacher/{id}',[
    'uses' => 'TeacherController@unpublishedTeacher',
    'as' => 'unpublished-teacher'
]);
Route::get('/teacher-info/published-teacher/{id}',[
    'uses' => 'TeacherController@publishedTeacher',
    'as' => 'published-teacher'
]);
Route::get('/teacher-info/delete-teacher/{id}',[
    'uses' => 'TeacherController@deleteTeacher',
    'as' => 'delete-teacher'
]);
Route::get('/teacher-info/edit-teacher/{id}',[
    'uses' => 'TeacherController@editTeacher',
    'as' => 'edit-teacher'
]);
Route::post('/teacher-info/update-teacher',[
    'uses' => 'TeacherController@updateTeacher',
    'as' => 'update-teacher'
]);

//Course Info

Route::get('/Course-info/add-course',[
    'uses' => 'CourseController@index',
    'as' => 'add-course'
]);
Route::get('/Course-info/manage-course',[
    'uses' => 'CourseController@manageCourse',
    'as' => 'manage-course'
]);
Route::post('/Course-info/save-course',[
    'uses' => 'CourseController@saveCourse',
    'as' => 'save-course'
]);
Route::get('/Course-info/unpublished-course/{id}',[
    'uses' => 'CourseController@unpublishedCourse',
    'as' => 'unpublished-course'
]);
Route::get('/Course-info/published-course/{id}',[
    'uses' => 'CourseController@publishedCourse',
    'as' => 'published-course'
]);
Route::get('/Course-info/delete-course/{id}',[
    'uses' => 'CourseController@deleteCourse',
    'as' => 'delete-course'
]);
Route::get('/Course-info/edit-course/{id}',[
    'uses' => 'CourseController@editCourse',
    'as' => 'edit-course'
]);
Route::post('/Course-info/update-course',[
    'uses' => 'CourseController@updateCourse',
    'as' => 'update-course'
]);
Route::get('/Course-info/view-course-details/{id}',[
    'uses' => 'CourseController@viewCourseDetails',
    'as' => 'view-course'
]);

//Events Info

Route::get('/event-info/add-event',[
    'uses' => 'EventController@index',
    'as' => 'add-event'
]);
Route::get('/event-info/manage-event',[
    'uses' => 'EventController@manageEvent',
    'as' => 'manage-event'
]);
Route::post('/event-info/save-event',[
    'uses' => 'EventController@saveEvent',
    'as' => 'save-event'
]);
Route::get('/event-info/unpublished-event/{id}',[
    'uses' => 'EventController@unpublishedEvent',
    'as' => 'unpublished-event'
]);
Route::get('/event-info/published-event/{id}',[
    'uses' => 'EventController@publishedEvent',
    'as' => 'published-event'
]);
Route::get('/event-info/delete-event/{id}',[
    'uses' => 'EventController@deleteEvent',
    'as' => 'delete-event'
]);
Route::get('/event-info/view-event/{id}',[
    'uses' => 'EventController@viewEvent',
    'as' => 'view-event'
]);
Route::get('/event-info/edit-event/{id}',[
    'uses' => 'EventController@editEvent',
    'as' => 'edit-event'
]);
Route::post('/event-info/update-event',[
    'uses' => 'EventController@updateEvent',
    'as' => 'update-event'
]);

//Blog Info

Route::get('/blog-info/add-blog',[
    'uses' => 'BlogController@index',
    'as' => 'add-blog'
]);
Route::get('/blog-info/manage-blog',[
    'uses' => 'BlogController@manageBlog',
    'as' => 'manage-blog'
]);
Route::post('/blog-info/save-blog',[
    'uses' => 'BlogController@saveBlog',
    'as' => 'save-blog'
]);
Route::get('/blog-info/unpublished-blog/{id}',[
    'uses' => 'BlogController@unpublishedBlog',
    'as' => 'unpublished-blog'
]);
Route::get('/blog-info/published-blog/{id}',[
    'uses' => 'BlogController@publishedBlog',
    'as' => 'published-blog'
]);
Route::get('/blog-info/delete-blog/{id}',[
    'uses' => 'BlogController@deleteBlog',
    'as' => 'delete-blog'
]);
Route::get('/blog-info/view-blog/{id}',[
    'uses' => 'BlogController@viewBlog',
    'as' => 'view-blog'
]);
Route::get('/blog-info/edit-blog/{id}',[
    'uses' => 'BlogController@editBlog',
    'as' => 'edit-blog'
]);
Route::post('/blog-info/update-blog',[
    'uses' => 'BlogController@updateBlog',
    'as' => 'update-blog'
]);

//Gallery


Route::get('/gallery/add-gallery',[
    'uses' => 'GalleryController@index',
    'as' => 'add-gallery'
]);
Route::get('/gallery/manage-gallery',[
    'uses' => 'GalleryController@manageGallery',
    'as' => 'manage-gallery'
]);
Route::post('/gallery/save-gallery',[
    'uses' => 'GalleryController@saveGallery',
    'as' => 'save-gallery'
]);
Route::get('/gallery/unpublished-gallery/{id}',[
    'uses' => 'GalleryController@unpublishedGallery',
    'as' => 'unpublished-gallery'
]);
Route::get('/gallery/published-gallery/{id}',[
    'uses' => 'GalleryController@publishedGallery',
    'as' => 'published-gallery'
]);
Route::get('/gallery/delete-gallery/{id}',[
    'uses' => 'GalleryController@deleteGallery',
    'as' => 'delete-gallery'
]);
Route::get('/gallery/edit-gallery/{id}',[
    'uses' => 'GalleryController@editGallery',
    'as' => 'edit-gallery'
]);
Route::post('/gallery/update-gallery',[
    'uses' => 'GalleryController@updateGallery',
    'as' => 'update-gallery'
]);

//Department

Route::get('/department/add-department',[
   'uses' => 'DepartmentController@index',
    'as' => 'add-department'
]);
Route::get('/department/manage-department',[
    'uses' => 'DepartmentController@manageDepartment',
    'as' => 'manage-department'
]);

Route::post('/department/save-department',[
    'uses' => 'DepartmentController@saveDepartment',
    'as' => 'save-department'
]);
Route::get('/department/unpublished-department/{id}',[
    'uses' => 'DepartmentController@unpublishedDepartment',
    'as' => 'unpublished-department'
]);
Route::get('/department/published-department/{id}',[
    'uses' => 'DepartmentController@publishedDepartment',
    'as' => 'published-department'
]);
Route::get('/department/delete-department/{id}',[
    'uses' => 'DepartmentController@deleteDepartment',
    'as' => 'delete-department'
]);
Route::get('/department/edit-department/{id}',[
    'uses' => 'DepartmentController@editDepartment',
    'as' => 'edit-department'
]);
Route::post('/department/update-department',[
    'uses' => 'DepartmentController@updateDepartment',
    'as' => 'update-department'
]);

//Student Status

Route::get('/student-status/add-student-status',[
    'uses' => 'StudentStatusController@index',
    'as' => 'add-student-status'
]);
Route::get('/student-status/manage-student-status',[
    'uses' => 'StudentStatusController@manageStudentStatus',
    'as' => 'manage-student-status'
]);

Route::post('/student-status/save-student-status',[
    'uses' => 'StudentStatusController@saveStudentStatus',
    'as' => 'save-student-status'
]);
Route::get('/student-status/unpublished-student-status/{id}',[
    'uses' => 'StudentStatusController@unpublishedStudentStatus',
    'as' => 'unpublished-student-status'
]);
Route::get('/student-status/published-student-status/{id}',[
    'uses' => 'StudentStatusController@publishedStudentStatus',
    'as' => 'published-student-status'
]);
Route::get('/student-status/delete-student-status/{id}',[
    'uses' => 'StudentStatusController@deleteStudentStatus',
    'as' => 'delete-student-status'
]);
Route::get('/student-status/edit-student-status/{id}',[
    'uses' => 'StudentStatusController@editStudentStatus',
    'as' => 'edit-student-status'
]);
Route::post('/student-status/update-student-status',[
    'uses' => 'StudentStatusController@updateStudentStatus',
    'as' => 'update-student-status'
]);

//Student info

Route::get('/student/add-student',[
    'uses' => 'StudentController@index',
    'as' => 'add-student'
]);
Route::get('/student/manage-student',[
    'uses' => 'StudentController@manageStudent',
    'as' => 'manage-student'
]);
Route::post('/student/save-student',[
    'uses' => 'StudentController@saveStudent',
    'as' => 'save-student'
]);
Route::get('/student/unpublished-student/{id}',[
    'uses' => 'StudentController@unpublishedStudent',
    'as' => 'unpublished-student'
]);
Route::get('/student/published-student/{id}',[
    'uses' => 'StudentController@publishedStudent',
    'as' => 'published-student'
]);
Route::get('/student/delete-student/{id}',[
    'uses' => 'StudentController@deleteStudent',
    'as' => 'delete-student'
]);
Route::get('/student/edit-student/{id}',[
    'uses' => 'StudentController@editStudent',
    'as' => 'edit-student'
]);
Route::post('/student/update-student',[
    'uses' => 'StudentController@updateStudent',
    'as' => 'update-student'
]);

//Slider

Route::get('/slider/add-slider',[
    'uses' => 'SliderController@index',
    'as' => 'add-slider'
]);
Route::get('/slider/manage-slider',[
    'uses' => 'SliderController@manageSlider',
    'as' => 'manage-slider'
]);
Route::post('/slider/save-slider',[
    'uses' => 'SliderController@saveSlider',
    'as' => 'save-slider'
]);
Route::get('/slider/unpublished-slider/{id}',[
    'uses' => 'SliderController@unpublishedSlider',
    'as' => 'unpublished-slider'
]);
Route::get('/slider/published-slider/{id}',[
    'uses' => 'SliderController@publishedSlider',
    'as' => 'published-slider'
]);
Route::get('/slider/delete-slider/{id}',[
    'uses' => 'SliderController@deleteSlider',
    'as' => 'delete-slider'
]);
Route::get('/slider/edit-slider/{id}',[
    'uses' => 'SliderController@editSlider',
    'as' => 'edit-slider'
]);
Route::post('/slider/update-slider',[
    'uses' => 'SliderController@updateSlider',
    'as' => 'update-slider'
]);

//About

Route::get('/about/add-about',[
    'uses' => 'AboutController@index',
    'as' => 'add-about'
]);
Route::get('/about/manage-about',[
    'uses' => 'AboutController@manageAbout',
    'as' => 'manage-about'
]);
Route::post('/about/save-about',[
    'uses' => 'AboutController@saveAbout',
    'as' => 'save-about'
]);
Route::get('/about/unpublished-about/{id}',[
    'uses' => 'AboutController@unpublishedAbout',
    'as' => 'unpublished-about'
]);
Route::get('/about/published-about/{id}',[
    'uses' => 'AboutController@publishedAbout',
    'as' => 'published-about'
]);
Route::get('/about/delete-about/{id}',[
    'uses' => 'AboutController@deleteAbout',
    'as' => 'delete-about'
]);
Route::get('/about/edit-about/{id}',[
    'uses' => 'AboutController@editAbout',
    'as' => 'edit-about'
]);
Route::post('/about/update-about',[
    'uses' => 'AboutController@updateAbout',
    'as' => 'update-about'
]);

//Skill

Route::get('/skill/add-skill',[
    'uses' => 'SkillController@index',
    'as' => 'add-skill'
]);
Route::get('/skill/manage-skill',[
    'uses' => 'SkillController@manageSkill',
    'as' => 'manage-skill'
]);
Route::post('/skill/save-skill',[
    'uses' => 'SkillController@saveSkill',
    'as' => 'save-skill'
]);
Route::get('/skill/unpublished-skill/{id}',[
    'uses' => 'SkillController@unpublishedSkill',
    'as' => 'unpublished-skill'
]);
Route::get('/skill/published-skill/{id}',[
    'uses' => 'SkillController@publishedSkill',
    'as' => 'published-skill'
]);
Route::get('/skill/delete-skill/{id}',[
    'uses' => 'SkillController@deleteSkill',
    'as' => 'delete-skill'
]);
Route::get('/skill/edit-skill/{id}',[
    'uses' => 'SkillController@editSkill',
    'as' => 'edit-skill'
]);
Route::post('/skill/update-skill',[
    'uses' => 'SkillController@updateSkill',
    'as' => 'update-skill'
]);

//contact

Route::get('/contact/add-contact',[
    'uses' => 'ContactController@index',
    'as' => 'add-contact'
]);
Route::get('/contact/manage-contact',[
    'uses' => 'ContactController@manageContact',
    'as' => 'manage-contact'
]);
Route::post('/contact/save-contact',[
    'uses' => 'ContactController@saveContact',
    'as' => 'save-contact'
]);
Route::get('/contact/unpublished-contact/{id}',[
    'uses' => 'ContactController@unpublishedContact',
    'as' => 'unpublished-contact'
]);
Route::get('/contact/published-contact/{id}',[
    'uses' => 'ContactController@publishedContact',
    'as' => 'published-contact'
]);
Route::get('/contact/delete-contact/{id}',[
    'uses' => 'ContactController@deleteContact',
    'as' => 'delete-contact'
]);
Route::get('/contact/edit-contact/{id}',[
    'uses' => 'ContactController@editContact',
    'as' => 'edit-contact'
]);
Route::post('/contact/update-contact',[
    'uses' => 'ContactController@updateContact',
    'as' => 'update-contact'
]);
