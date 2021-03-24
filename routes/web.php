<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ModelTestController;
use App\Http\Controllers\ModelQuestionController;
use App\Http\Controllers\StudentProfileController;
use App\Http\Controllers\StudentModelTestController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CurrentAffairController;
use App\Http\Controllers\PreviousQuestionController;
use App\Http\Controllers\BcsController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\StudentSubjectTestController;
use App\Http\Controllers\SubjectQuestionController;


Route::group(['prefix'=>'admin'],function(){
   
    Route::get('/login', [AdminLoginController::class, 'ShowLoginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'Login'])->name('admin.login.submit');
    Route::get('/logout', [AdminLoginController::class, 'Logout'])->name('admin.logout');
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
   
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [StudentController::class, 'Dashboard'])->name('student-dashboard');
Route::get('/logout', [LoginController::class, 'StudentLogout'])->name('student.logout');


Route::get('/model/add-model', [ModelTestController::class, 'add_model'])->name('add-modeltest-form');
Route::post('/model/save-model', [ModelTestController::class, 'save_model'])->name('save-model');
Route::get('/model/model-list', [ModelTestController::class, 'ModelTestList'])->name('model-list');
Route::get('/model/edit-model/{id}', [ModelTestController::class, 'EditModelTest'])->name('edit-model');
Route::post('/model/update-model/{id}', [ModelTestController::class, 'UpdateModelTest'])->name('update-model');
Route::get('/model/delete-model/{id}', [ModelTestController::class, 'DeleteModelTest'])->name('delete-model');

//model question
Route::get('/question/add-model-question', [ModelQuestionController::class, 'AddModelQuestion'])->name('add-model-question-form');
Route::post('/question/save-model-question', [ModelQuestionController::class, 'SaveModelQuestion'])->name('save-model-question');
Route::get('/question/view-model-question', [ModelQuestionController::class, 'ViewModelQuestion'])->name('view-model-question');

Route::get('/question/edit-model-question/{id}', [ModelQuestionController::class, 'EditModelQuestion'])->name('edit-model-question');
Route::post('/question/update-model-question/{id}', [ModelQuestionController::class, 'UpdateModelQuestion'])->name('update-model-question');
Route::get('/question/delete-model-question/{id}', [ModelQuestionController::class, 'DeleteModelQuestion'])->name('delete-model-question');



//subject question
Route::get('/question/add-subject-question', [SubjectQuestionController::class, 'AddSubjectQuestion'])->name('add-subject-question-form');
Route::post('/question/save-subject-question', [SubjectQuestionController::class, 'SaveSubjectQuestion'])->name('save-subject-question');

//current affair

Route::get('/current-affair-form', [CurrentAffairController::class, 'currentAffair'])->name('current-affair-form');
Route::post('/save-current-affair', [CurrentAffairController::class, 'SaveCurrentAffair'])->name('save-current-affair');
Route::get('/current-affair-list', [CurrentAffairController::class, 'currentAffairList'])->name('current-affair-list');

Route::get('/show-current-affairs', [CurrentAffairController::class, 'ShowCurrentAffair'])->name('show-current-affairs')->middleware('auth');



Route::get('/edit-current-affair/{id}', [CurrentAffairController::class, 'EditCurrentAffair'])->name('edit-current-affair');
Route::post('/update-current-affair/{id}', [CurrentAffairController::class, 'UpdateCurrentAffair'])->name('update-current-affair');
Route::get('/delete-current-affair/{id}', [CurrentAffairController::class, 'DeleteCurrentAffair'])->name('delete-current-affair');



Route::get('/bcs/add-bcs', [BcsController::class, 'add_bcs'])->name('bcs-no-form');
Route::post('/bcs/save-bcs', [BcsController::class, 'save_bcs'])->name('save-bcs');
Route::get('/bcs/bcs-list', [BcsController::class, 'BcsList'])->name('bcs-list');
Route::get('/bcs/edit-bcs/{id}', [BcsController::class, 'EditBcs'])->name('edit-bcs');
Route::post('/bcs/update-bcs/{id}', [BcsController::class, 'UpdateBcs'])->name('update-bcs');
Route::get('/bcs/delete-bcs/{id}', [BcsController::class, 'DeleteBcs'])->name('delete-bcs');


//previous question

Route::get('/question/previous-year-question-form', [PreviousQuestionController::class, 'PreviousQuestion'])->name('add-previous-question-form');
Route::post('/question/save-previous-year-question', [PreviousQuestionController::class, 'SavePreviousQuestion'])->name('save-previous-question');
Route::get('/question/view-previous-year-question', [PreviousQuestionController::class, 'ViewPreviousQuestion'])->name('view-previous-question');

Route::get('/question/edit-previous-question/{id}', [PreviousQuestionController::class, 'EditPreviousQuestion'])->name('edit-previous-question');
Route::post('/question/update-previous-question/{id}', [PreviousQuestionController::class, 'UpdatePreviousQuestion'])->name('update-previous-question');
Route::get('/question/delete-previous-question/{id}', [PreviousQuestionController::class, 'DeletePreviousQuestion'])->name('delete-previous-question');


Route::get('/subject/add-subject', [StudyController::class, 'add_subject'])->name('add-subject-form');
Route::post('/subject/save-subject', [StudyController::class, 'save_subject'])->name('save-subject');
/*Route::get('/model/model-list', [StudyController::class, 'ModelTestList'])->name('model-list');
Route::get('/model/edit-model/{id}', [StudyController::class, 'EditModelTest'])->name('edit-model');
Route::post('/model/update-model/{id}', [StudyController::class, 'UpdateModelTest'])->name('update-model');
Route::get('/model/delete-model/{id}', [StudyController::class, 'DeleteModelTest'])->name('delete-model');*/

//chapter

Route::get('/chapter/add-chapter-form', [StudyController::class, 'add_chapter'])->name('add-chapter-form');
Route::post('/chapter/save-chapter', [StudyController::class, 'save_chapter'])->name('save-chapter');
Route::get('/chapter/chapter-list/{id}', [StudyController::class, 'chapter_list'])->name('show-chapters')->middleware('auth');
Route::get('/read/details/{id}/{chapter_name}', [StudyController::class, 'read_details'])->name('read-details');


//details
Route::get('/details/add-details', [StudyController::class, 'add_details'])->name('add-details-form');
Route::post('/details/save-details', [StudyController::class, 'save_details'])->name('save-details');

//study
Route::get('subjects/all-subjects', [StudyController::class, 'all_subjects'])->name('show-subjects')->middleware('auth');



//student part
Route::get('/student/show-profile', [StudentProfileController::class, 'ShowProfile'])->name('show-profile');
Route::post('/student/update-profile/{email}', [StudentProfileController::class, 'UpdatePofile'])->name('update-profile');
//model test
Route::get('/student/model-test-form', [StudentModelTestController::class, 'ModelTestForm'])->name('model-test-form');
Route::get('/student/give-model-test/{model_code?}', [StudentModelTestController::class, 'GiveModelTest'])->name('give-model-test');
Route::post('/student/submit-test/{code}', [StudentModelTestController::class, 'SubmitAns'])->name('submit-ans');

//subject test
Route::get('/student/subject-test-form', [StudentSubjectTestController::class, 'SubjectTestForm'])->name('subject-test-form')->middleware('auth');
Route::get('/student/give-subject-test/{id?}', [StudentSubjectTestController::class, 'GiveSubjectTest'])->name('give-subject-test');
Route::post('/student/submit-subject-test/{id}', [StudentSubjectTestController::class, 'SubmitAns'])->name('submit-sub-ans');

//view ans

Route::get('/student/view-ans/{code}', [StudentModelTestController::class, 'ViewAns'])->name('view-ans');
Route::get('/student/view-sub-ans/{code}', [StudentSubjectTestController::class, 'ViewAns'])->name('view-sub-ans');



Route::get('/student/mistakes', [StudentModelTestController::class, 'Mistakes'])->name('mistakes');
//Route::get('/student/submit-test/{ques_id}', [ReviewController::class, 'Reviews'])->name('review-list');
Route::get('/student/delete-mistke/{id}', [StudentModelTestController::class, 'DeleteMistake'])->name('delete-mistake');


Route::get('/previous-bcs-ques', [BcsController::class, 'PreviousQuestion'])->name('previous-bcs-ques')->middleware('auth');
Route::get('/view-question/{id}', [BcsController::class, 'ViewQuestion'])->name('view-question')->middleware('auth');


Route::get('book/create', [DocumentsController::class, 'Create'])->name('add-book-form');
Route::post('books/save', [DocumentsController::class, 'Store'])->name('save-book');
Route::get('book/list', [DocumentsController::class, 'BookList'])->name('book-list')->middleware('auth');
Route::get('/{id}', [DocumentsController::class, 'BookDownload'])->name('download-book');

Route::get('bcs/syllabus', [DocumentsController::class, 'Syllabus'])->name('syllabus')->middleware('auth');
Route::get('videos/create', [VideoController::class, 'VideoCreate'])->name('videos-create');
Route::post('videos/save', [VideoController::class, 'VideoSave'])->name('videos-save');
Route::get('videos/list', [VideoController::class, 'VideoList'])->name('videos-list')->middleware('auth');

/*Route::get('model/total-model', [StudentController::class, 'TotalModel'])->name('total-model');
Route::get('/total-question', [StudentController::class, 'TotalQuestion'])->name('total-question');
Route::get('/total-student', [StudentController::class, 'TotalStudent'])->name('total-student');*/