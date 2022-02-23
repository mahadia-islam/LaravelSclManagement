<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\AssignStudentController;
use App\Http\Controllers\backend\AssignSubjectController;
use App\Http\Controllers\backend\DesignationController;
use App\Http\Controllers\backend\ExamTypeController;
use App\Http\Controllers\backend\FeeCategoryAmountController;
use App\Http\Controllers\backend\FeeCategoryController;
use App\Http\Controllers\backend\Student\StudentRegistretionController;
use App\Http\Controllers\backend\StudentController;
use App\Http\Controllers\backend\StudentGroupController;
use App\Http\Controllers\backend\StudentShiftController;
use App\Http\Controllers\backend\StudentSubjectController;
use App\Http\Controllers\backend\StudentYearController;
use App\Http\Controllers\backend\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified','adminaccess'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/admin/logout',[AdminController::class,'logout'])->name("admin.logout");

// user management

Route::middleware(['auth:sanctum', 'verified','adminaccess'])->prefix('/user')->group(function(){
    Route::get('/view', [UserController::class, 'index'])->name('user.view');
    Route::get('/create', [UserController::class, 'show_create'])->name('user.show_create_form');
    Route::post('/save', [UserController::class, 'store'])->name('user.create');
    Route::get('/destroy/{id}', [UserController::class, 'destroy'])->name('user.delete');
    Route::get('/edit/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::post('/update/{id}',[UserController::class,'update'])->name('user.update');
    Route::get('/profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('/reset_password',[UserController::class,'reset_password'])->name('user.reset_password');
    Route::post('/set/password',[UserController::class,'update_password'])->name('user.update_password');
});

// student management

Route::middleware(['auth:sanctum', 'verified','adminaccess'])->prefix('/student')->group(function(){

    Route::get('/view', [StudentController::class, 'index'])->name('student.view');
    Route::get('/create', [StudentController::class, 'show_create_form'])->name('student.show_create_form');
    Route::post('/store', [StudentController::class, 'create'])->name('student.create');
    Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
    Route::post('/update/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::get('/delete/{id}',[StudentController::class,'delete'])->name('student.delete');

});

// student year routes

Route::middleware(['auth:sanctum', 'verified', 'adminaccess'])->prefix('/year')->group(function () {

    Route::get('/view',[StudentYearController::class,'index'])->name('student_year.view');
    Route::get('/create',[StudentYearController::class,'create'])->name('student_year.show_create_form');
    Route::post('/store',[StudentYearController::class,'store'])->name('student_year.create');
    Route::get('/edit/{id}',[StudentYearController::class,'edit'])->name('student_year.edit');
    Route::post('/update/{id}',[StudentYearController::class,'update'])->name('student_year.update');
    Route::get('/delete/{id}',[StudentYearController::class,'delete'])->name('student_year.delete');

});

// student group routes

Route::middleware(['auth:sanctum', 'verified', 'adminaccess'])->prefix('/group')->group(function () {

    Route::get('/view', [StudentGroupController::class, 'index'])->name('student_group.view');
    Route::get('/create', [StudentGroupController::class, 'create'])->name('student_group.show_create_form');
    Route::post('/store', [StudentGroupController::class, 'store'])->name('student_group.create');
    Route::get('/edit/{id}', [StudentGroupController::class, 'edit'])->name('student_group.edit');
    Route::post('/update/{id}', [StudentGroupController::class, 'update'])->name('student_group.update');
    Route::get('/delete/{id}', [StudentGroupController::class, 'delete'])->name('student_group.delete');

});

// student shift routes

Route::middleware(['auth:sanctum', 'verified', 'adminaccess'])->prefix('/shift')->group(function () {

    Route::get('/view', [StudentShiftController::class, 'index'])->name('student_shift.view');
    Route::get('/create', [StudentShiftController::class, 'create'])->name('student_shift.show_create_form');
    Route::post('/store', [StudentShiftController::class, 'store'])->name('student_shift.create');
    Route::get('/edit/{id}', [StudentShiftController::class, 'edit'])->name('student_shift.edit');
    Route::post('/update/{id}', [StudentShiftController::class, 'update'])->name('student_shift.update');
    Route::get('/delete/{id}', [StudentShiftController::class, 'delete'])->name('student_shift.delete');

});

// student fee category routes

Route::middleware(['auth:sanctum', 'verified', 'adminaccess'])->prefix('/fee_category')->group(function () {

    Route::get('/view', [FeeCategoryController::class, 'index'])->name('fee_category.view');
    Route::get('/create', [FeeCategoryController::class, 'create'])->name('fee_category.show_create_form');
    Route::post('/store', [FeeCategoryController::class, 'store'])->name('fee_category.create');
    Route::get('/edit/{id}', [FeeCategoryController::class, 'edit'])->name('fee_category.edit');
    Route::post('/update/{id}', [FeeCategoryController::class, 'update'])->name('fee_category.update');
    Route::get('/delete/{id}', [FeeCategoryController::class, 'delete'])->name('fee_category.delete');

});

// student fee category amount routes

Route::middleware(['auth:sanctum', 'verified', 'adminaccess'])->prefix('/fee_category_amount')->group(function () {

    Route::get('/view', [FeeCategoryAmountController::class, 'index'])->name('fee_category_amount.view');
    Route::get('/create', [FeeCategoryAmountController::class, 'create'])->name('fee_category_amount.show_create_form');
    Route::post('/store', [FeeCategoryAmountController::class, 'store'])->name('fee_category_amount.create');
    Route::get('/edit/{id}', [FeeCategoryAmountController::class, 'edit'])->name('fee_category_amount.edit');
    Route::post('/update/{id}', [FeeCategoryAmountController::class, 'update'])->name('fee_category_amount.update');
    Route::get('/delete/{id}', [FeeCategoryAmountController::class, 'delete'])->name('fee_category_amount.delete');
    Route::get('/show/{id}',[FeeCategoryAmountController::class,'show'])->name('fee_category_amount.show');

});

// exam types routes

Route::middleware(['auth:sanctum', 'verified', 'adminaccess'])->prefix('/exam_type')->group(function () {

    Route::get('/view', [ExamTypeController::class, 'index'])->name('exam_type.view');
    Route::get('/create', [ExamTypeController::class, 'create'])->name('exam_type.show_create_form');
    Route::post('/store', [ExamTypeController::class, 'store'])->name('exam_type.create');
    Route::get('/edit/{id}', [ExamTypeController::class, 'edit'])->name('exam_type.edit');
    Route::post('/update/{id}', [ExamTypeController::class, 'update'])->name('exam_type.update');
    Route::get('/delete/{id}', [ExamTypeController::class, 'delete'])->name('exam_type.delete');
});

// student subjects routes

Route::middleware(['auth:sanctum', 'verified', 'adminaccess'])->prefix('/student_subject')->group(function () {

    Route::get('/view', [StudentSubjectController::class, 'index'])->name('student_subject.view');
    Route::get('/create', [StudentSubjectController::class, 'create'])->name('student_subject.show_create_form');
    Route::post('/store', [StudentSubjectController::class, 'store'])->name('student_subject.create');
    Route::get('/edit/{id}', [StudentSubjectController::class, 'edit'])->name('student_subject.edit');
    Route::post('/update/{id}', [StudentSubjectController::class, 'update'])->name('student_subject.update');
    Route::get('/delete/{id}', [StudentSubjectController::class, 'delete'])->name('student_subject.delete');
});

// assign subject routes

Route::middleware(['auth:sanctum', 'verified', 'adminaccess'])->prefix('/assign_subject')->group(function () {

    Route::get('/view', [AssignSubjectController::class, 'index'])->name('assign_subject.view');
    Route::get('/create', [AssignSubjectController::class, 'create'])->name('assign_subject.show_create_form');
    Route::post('/store', [AssignSubjectController::class, 'store'])->name('assign_subject.create');
    Route::get('/edit/{id}', [AssignSubjectController::class, 'edit'])->name('assign_subject.edit');
    Route::post('/update/{id}', [AssignSubjectController::class, 'update'])->name('assign_subject.update');
    Route::get('/delete/{id}', [AssignSubjectController::class, 'delete'])->name('assign_subject.delete');
    Route::get('/show/{id}', [AssignSubjectController::class, 'show'])->name('assign_subject.show');
});

// student designation routes

Route::middleware(['auth:sanctum', 'verified', 'adminaccess'])->prefix('/designation')->group(function () {

    Route::get('/view', [DesignationController::class, 'index'])->name('designation.view');
    Route::get('/create', [DesignationController::class, 'create'])->name('designation.show_create_form');
    Route::post('/store', [DesignationController::class, 'store'])->name('designation.create');
    Route::get('/edit/{id}', [DesignationController::class, 'edit'])->name('designation.edit');
    Route::post('/update/{id}', [DesignationController::class, 'update'])->name('designation.update');
    Route::get('/delete/{id}', [DesignationController::class, 'delete'])->name('designation.delete');
});

// students crud routes

Route::middleware(['auth:sanctum', 'verified', 'adminaccess'])->prefix('/user/student')->group(function () {

    Route::get('/view', [StudentRegistretionController::class, 'index'])->name('user_student.view');
    Route::get('/create', [StudentRegistretionController::class, 'create'])->name('user_student.show_create_form');
    Route::post('/store', [StudentRegistretionController::class, 'registretion'])->name('user_student.create');
    Route::get('/edit/{id}', [StudentRegistretionController::class, 'edit'])->name('user_student.edit');
    Route::post('/update/{id}', [StudentRegistretionController::class, 'update'])->name('user_student.update');
    Route::get('/delete/{id}', [StudentRegistretionController::class, 'delete'])->name('user_student.delete');
    Route::get('/generate/pdf', [StudentRegistretionController::class, 'generate_pdf'])->name('user_student.generate_pdf');
});

// assign students routes

Route::middleware(['auth:sanctum', 'verified', 'adminaccess'])->prefix('/assign_student')->group(function () {

    Route::get('/view', [AssignStudentController::class, 'index'])->name('assign_student.view');
    Route::get('/create', [AssignStudentController::class, 'create'])->name('assign_student.show_create_form');
    Route::post('/store', [AssignStudentController::class, 'store'])->name('assign_student.create');
    Route::get('/edit/{id}', [AssignStudentController::class, 'edit'])->name('assign_student.edit');
    Route::post('/update/{id}', [AssignStudentController::class, 'update'])->name('assign_student.update');
    Route::get('/delete/{id}', [AssignStudentController::class, 'delete'])->name('assign_student.delete');
    Route::get('/show/{id}',[AssignStudentController::class,'show'])->name('assign_student.show');
    Route::get('/generate/pdf/{id}',[AssignStudentController::class,'pdf_generate'])->name('assign_student.pdf_generate');

});
