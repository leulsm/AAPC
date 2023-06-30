<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StuffController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DirectorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

Route::middleware('auth', 'role:user')->group(function () {
    Route::get('/stuffuser/index', [UserController::class, 'staffuserindex'])->name('stuffuser');
    Route::get('/stuffuser/statustable', [UserController::class, 'statustable'])->name('stuffuser.statustable');
    Route::get('/stuffuser/request', [UserController::class, 'staffrequest'])->name('stuffuser.request');
    Route::get('/stuffuser/singlerequestpage', [UserController::class, 'singlerequestpage'])->name('stuffuser.singlerequestpage');
    Route::get('/stuffuser/viewrequest', [UserController::class, 'viewrequest'])->name('stuffuser.viewrequest');
    Route::get('/stuffuser/editrequest', [UserController::class, 'editrequest'])->name('stuffuser.editrequest');
    Route::get('/stuffuser/userprofile', [UserController::class, 'userprofile'])->name('stuffuser.userprofile');
    Route::get('/stuffuser/setting', [UserController::class, 'setting'])->name('stuffuser.setting');
});
Route::middleware('auth', 'role:expert')->group(function () {
    Route::get('/expertuser/index', [ExpertController::class, 'expertuserindex'])->name('expertuser');
    Route::get('/expertuser/assined', [ExpertController::class, 'assined'])->name('expertuser.assined');
    Route::get('/expertuser/previousrequest', [ExpertController::class, 'previousrequest'])->name('expertuser.previousrequest');
});

Route::middleware('auth', 'role:director')->group(function () {
    Route::get('/directoruser/index', [DirectorController::class, 'directoruserindex'])->name('directoruser');
    Route::get('/directoruser/softrequest', [DirectorController::class, 'softrequest'])->name('directoruser.softrequest');
    Route::get('/directoruser/approve', [DirectorController::class, 'approve'])->name('directoruser.approve');
    Route::get('/directoruser/oldrequests', [DirectorController::class, 'oldrequests'])->name('directoruser.oldrequests');
});

Route::middleware('auth', 'role:admin')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'Dashboard')->name('admin.dashboard');
        Route::get('/admin/messages', 'ContactMessage')->name('admin.message');
        Route::get('/admin/director', 'Director')->name('admin.director');
        Route::post('/admin/director', [RegisteredUserController::class, 'store'])->name('admin.directorr');

        Route::post('/admin/employee', [RegisteredUserController::class, 'store'])->name('admin.employee');
        Route::get('/admin/employee', 'Employee')->name('admin.employee');
        Route::get('/admin/expert', 'Expert')->name('admin.expert');
        Route::get('/admin/userforms', 'User')->name('admin.userforms');
        Route::get('/admin/forgotpassword', 'ForgotPassword')->name('admin.forgotpassword');
        Route::get('/admin/resetpassword', 'ResetPassword')->name('admin.resetpassword');
        Route::get('/admin/staffinfotable', 'StaffInfoTable')->name('admin.staffinfotable');
        Route::get('/admin/exporttable', 'ExportTable')->name('admin.exporttable');
        Route::get('/admin/report', 'Report')->name('admin.report');
        Route::get('/admin/profile', 'Profile')->name('admin.profile');
        Route::get('/admin/charts', 'Charts')->name('admin.charts');
        Route::get('/admin/timeline', 'Timeline')->name('admin.timeline');
        Route::get('/admin/chats', 'Chats')->name('admin.chats');
        Route::get('/admin/viewrequests', 'ViewRequest')->name('admin.viewrequest');
        Route::get('/admin/requestsnetwork', 'RequestNetwork')->name('admin.requestsnetwork');
        Route::get('/admin/databaserequests', 'DatabaseRequests')->name('admin.databaserequests');
    });
});
require __DIR__ . '/auth.php';
