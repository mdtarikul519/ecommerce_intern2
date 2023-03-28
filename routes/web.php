<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CrudBookController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\UserdController;
use App\Http\Controllers\admin\UserPermissionController;
use App\Http\Controllers\Admin\UserRoleController;
use App\Http\Controllers\Admin\UserUserController;
use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\Admin\CrudController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\Admin\ExamResultController;
use App\Http\Controllers\Admin\FruiteController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\StudentedController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [WebsiteController::class, 'index']);
Route::get('/contact', [WebsiteController::class, 'contact'])->name('website.contact');
Route::post('/contact-submit', [WebsiteController::class, 'contact_submit'])->name('website.contact_submit');

route::group(['prfix' => 'admin', 'Middleware' => ['auth'], 'namespace' => 'admin'], function () {

    Route::get('dashboard/home', [DashboardController::class, 'index'])->name('home');
    // Route::post('dashboard/logout', [DashboardController::class, 'logout'])->name('dashboard.logout');
});




Route::group(['prefix' => 'contact',], function () {

    Route::get('/index', [ContactController::class, 'index'])->name('dashboard.contact.index');
    Route::get('/create', [ContactController::class, 'create'])->name('dashboard.contact.create');
    Route::get('/show/{id}', [ContactController::class, 'show'])->name('dashboard.contact.show');
    Route::get('/destroy/{id}', [ContactController::class, 'destroy'])->name('dashboard.contact.destroy');
});

Route::group(['prefix' => 'user',], function () {

    Route::get('index', [UserdController::class, 'index'])->name('dashboard.user.index');
    Route::get('view/{id}', [UserdController::class, 'view'])->name('dashboard.user.view');
    Route::get('create', [UserdController::class, 'create'])->name('dashboard.user.create');
    Route::post('store', [UserdController::class, 'store'])->name('dashboard.user.store');
});

Route::group(['prefix' => 'user_role',], function () {

    Route::get('index', [UserRoleController::class, 'index'])->name('dashboard.user_role.index');
    Route::get('view/{id}', [UserRoleController::class, 'view'])->name('dashboard.user_role.view');
    Route::get('create', [UserRoleController::class, 'create'])->name('dashboard.user_role.create');
    Route::post('store', [UserRoleController::class, 'store'])->name('dashboard.user_role.store');
    Route::get('edit/{id}', [UserRoleController::class, 'edit'])->name('dashboard.user_role.edit');
    Route::post('update/{id}', [UserRoleController::class, 'update'])->name('dashboard.user_role.update');
    Route::get('destroy/{id}', [UserRoleController::class, 'destroy'])->name('dashboard.user_role.destroy');
});


// Route::group(['prefix' => 'user_permission',], function () {

//     Route::get('index', [UserPermissionController::class, 'index'])->name('dashboard.user_permission.user_id');
//     Route::get('assain_role/{id}', [UserPermissionController::class, 'assain_role'])->name('dashboard.user_permission.assain_role');
//     Route::get('create', [UserPermissionController::class, 'create'])->name('dashboard.user_permission.create');
//     Route::post('user_store', [UserPermissionController::class, 'user_store'])->name('dashboard.user_permission.user_store');

// });


Route::group(['prefix' => 'useruser_role',], function () {
    Route::get('assain_role/{id}', [UserUserController::class, 'assain_role'])->name('dashboard.useruser_role.assain_role');
    Route::post('user_store', [UserUserController::class, 'user_store'])->name('dashboard.useruser_role.user_store');
    Route::get('view/{id}', [UserUserController::class, 'view'])->name('dashboard.useruser_role.view');


});
Route::group(['prefix' => 'common',], function () {

    Route::get('/index', [DashboardController::class, 'demo_index'])->name('dashboard.common.index');
    Route::get('/create', [DashboardController::class, 'demo_create'])->name('dashboard.common.create');
    Route::get('/view', [DashboardController::class, 'demo_view'])->name('dashboard.common.view');
});

Route::group(['prefix' => 'students',], function () {

    Route::get('index', [StudentController::class, 'index'])->name('dashboard.students.index');
    Route::get('view/{id}', [StudentController::class, 'view'])->name('dashboard.students.view');
    Route::get('create', [StudentController::class, 'create'])->name('dashboard.students.create');
    Route::post('store', [StudentController::class, 'store'])->name('dashboard.students.store');
    Route::get('edit/{id}', [StudentController::class, 'edit'])->name('dashboard.students.edit');
    Route::post('update/{id}', [StudentController::class, 'update'])->name('dashboard.students.update');
    Route::get('destroy/{id}', [StudentController::class, 'destroy'])->name('dashboard.students.destroy');
});


Route::group(['prefix' => 'department',], function () {

    Route::get('index', [StudentController::class, 'index'])->name('dashboard.department.index');
    Route::get('view/{id}', [StudentController::class, 'view'])->name('dashboard.department.view');
    Route::get('create', [StudentController::class, 'create'])->name('dashboard.department.create');
    Route::post('store', [StudentController::class, 'store'])->name('dashboard.department.store');
    Route::get('edit/{id}', [StudentController::class, 'edit'])->name('dashboard.department.edit');
    Route::post('update/{id}', [StudentController::class, 'update'])->name('dashboard.department.update');
    Route::get('destroy/{id}', [StudentController::class, 'destroy'])->name('dashboard.department.destroy');
});

Route::group(['prefix' => 'crud',], function () {

    Route::get('/index', [CrudController::class, 'index'])->name('dashboard.crud.index');
    Route::post('/create', [CrudController::class, 'store'])->name('dashboard.crud.store');
    Route::get('/edit/{id}', [CrudController::class, 'edit'])->name('dashboard.crud.edit');
    Route::post('/update', [CrudController::class, 'update'])->name('dashboard.crud.update');
    Route::get('/show/{id}', [CrudController::class, 'show'])->name('dashboard.crud.show');
    Route::get('/destroy/{id}', [CrudController::class, 'destroy'])->name('dashboard.crud.destroy');
});

Route::group(['prefix' => 'book',], function () {

    Route::get('/index', [CrudBookController::class, 'index'])->name('dashboard.crudbook.index');
    Route::get('/create', [CrudBookController::class, 'create'])->name('dashboard.crudbook.create');
    Route::post('/store', [CrudBookController::class, 'store'])->name('dashboard.crudbook.store');
    Route::get('/edit/{id}', [CrudBookController::class, 'edit'])->name('dashboard.crudbook.edit');
    Route::post('/update', [CrudBookController::class, 'update'])->name('dashboard.crudbook.update');
    Route::get('/show/{id}', [CrudBookController::class, 'show'])->name('dashboard.crudbook.show');
    Route::get('/destroy/{id}', [CrudBookController::class, 'destroy'])->name('dashboard.crudbook.destroy');
});


Route::group(['prefix' => 'fruits',], function () {

    Route::get('/index', [FruiteController::class, 'index'])->name('dashboard.fruite.index');
    Route::get('/create', [FruiteController::class, 'create'])->name('dashboard.fruite.create');
    Route::post('/store', [FruiteController::class, 'store'])->name('dashboard.fruite.store');
    Route::get('/edit/{id}', [FruiteController::class, 'edit'])->name('dashboard.fruite.edit');
    Route::post('/update/{id}', [FruiteController::class, 'update'])->name('dashboard.fruite.update');
    Route::get('/details/{id}', [FruiteController::class, 'details'])->name('dashboard.fruite.details');
    Route::get('/destroy/{id}', [FruiteController::class, 'destroy'])->name('dashboard.fruite.destroy');
});


Route::group(['prefix' => 'shop',], function () {

    Route::get('/index', [ShopController::class, 'index'])->name('dashboard.shop.index');
    Route::get('/create', [ShopController::class, 'create'])->name('dashboard.shop.create');
    Route::post('/store', [ShopController::class, 'store'])->name('dashboard.shop.store');
    Route::get('/edit/{id}', [ShopController::class, 'edit'])->name('dashboard.shop.edit');
    Route::post('/update/{id}', [ShopController::class, 'update'])->name('dashboard.shop.update');
    Route::get('/details/{id}', [ShopController::class, 'details'])->name('dashboard.shop.details');
    Route::get('/destroy/{id}', [ShopController::class, 'destroy'])->name('dashboard.shop.destroy');
});

Route::group(['prefix' => 'Studented',], function () {

    Route::get('/index', [StudentedController::class, 'index'])->name('dashboard.studented.index');
    Route::get('/create', [StudentedController::class, 'create'])->name('dashboard.studented.create');
    Route::post('/store', [StudentedController::class, 'store'])->name('dashboard.studented.store');
    Route::get('/edit/{id}', [StudentedController::class, 'edit'])->name('dashboard.studented.edit');
    Route::post('/update/{id}', [StudentedController::class, 'update'])->name('dashboard.studented.update');
    Route::get('/details/{id}', [StudentedController::class, 'details'])->name('dashboard.studented.details');
    Route::get('/destroy/{id}', [StudentedController::class, 'destory'])->name('dashboard.studented.destroy');
});

   
Route::group(['prefix' => 'exam',], function () {

    Route::get('/index', [ExamController::class, 'index'])->name('dashboard.exam.index');
    Route::get('/create', [ExamController::class, 'create'])->name('dashboard.exam.create');
    Route::post('/store', [ExamController::class, 'store'])->name('dashboard.exam.store');
    Route::get('/edit/{id}', [ExamController::class, 'edit'])->name('dashboard.exam.edit');
    Route::post('/update/{id}', [ExamController::class, 'update'])->name('dashboard.exam.update');
    Route::get('/details/{id}', [ExamController::class, 'details'])->name('dashboard.exam.details');
    Route::get('/destroy/{id}', [ExamController::class, 'destory'])->name('dashboard.exam.destroy');
});

Route::group(['prefix' => 'exam_result',], function () {

    Route::get('/index', [ExamResultController::class, 'index'])->name('dashboard.exam_result.index');
    Route::get('/create', [ExamResultController::class, 'create'])->name('dashboard.exam_result.create');
    Route::post('/store', [ExamResultController::class, 'store'])->name('dashboard.exam_result.store');
    Route::get('/edit/{id}', [ExamResultController::class, 'edit'])->name('dashboard.exam_result.edit');
    Route::post('/update/{id}', [ExamResultController::class, 'update'])->name('dashboard.exam_result.update');
    Route::get('/details/{id}', [ExamResultController::class, 'details'])->name('dashboard.exam_result.details');
    Route::get('/destroy/{id}', [ExamResultController::class, 'destory'])->name('dashboard.exam_result.destroy');
});
