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


