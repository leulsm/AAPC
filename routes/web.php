<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StuffController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
// Route::get('/home/header', [HomeController::class, 'Homenavbar']);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});
// Route::middleware('auth', 'role:user')->group(function () {
//     Route::controller(HomeController::class)->group(function () {
//         Route::get('/home/header', 'Homenavbar')->name('home.header');
//     });
// });
Route::middleware('auth')->group(function () {
    Route::get('/priviousrequest', [StuffController::class, 'previous'])->name('stuff.priviousrequest');
    Route::get('/stuffhome', [StuffController::class, 'stuffhome'])->name('stuff.stuffhome');
});
Route::middleware('auth', 'role:admin')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'Dashboard')->name('admin.dashboard');
        Route::get('/admin/messages', 'ContactMessage')->name('admin.message');
        // Route::get('/admin/create-category', 'CreateCategory')->name('admin.createcategory');
        // Route::get('/admin/all-category', 'AllCategory')->name('admin.allcategory');
        // Route::get('/admin/create-sub-category', 'CreateSubCategory')->name('admin.createsubcategory');
        // Route::get('/admin/all-sub-category', 'AllSubCategory')->name('admin.allsubcategory');
        // Route::get('/admin/create-brands', 'CreateBrands')->name('admin.createbrands');
        // // Route::get('/admin/all-brands', 'AllBrands')->name('admin.allbrands');
        Route::get('/admin/director', 'Director')->name('admin.director');
        // Route::post('/admin/director', 'Director')->name('admin.director');
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
        // Route::post('/register-director', 'DirectorController@register');
        // Route::post('/director/register', 'register')->name('director.register');
        // Route::post('/register-director', 'DirectorRegister');
    });

    Route::controller(ProductController::class)->group(function () {
        Route::get('/admin/add-product', 'AddProduct')->name('admin.addproduct');
        Route::get('/admin/all-product', 'ContactMessage')->name('admin.allproduct');
    });

    Route::controller(DirectorController::class)->group(function () {
        // Route::get('/admin/add-product', 'AddProduct')->name('admin.addproduct');
        // Route::get('/admin/all-product', 'ContactMessage')->name('admin.allproduct');
        Route::post('/admin/director', 'register')->name('admin.directorr');
    });
});
require __DIR__ . '/auth.php';
