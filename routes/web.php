<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

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


Route::group(['middleware'=>'admin_auth'],function(){
    Route::get('/logout',[AdminController::class,'logout'])->name('logout');

    Route::get('/employee',[EmployeeController::class,'employee'])->name('employee');
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');


    Route::get('/company',[CompanyController::class,'company'])->name('company');
Route::post('addcompany',[CompanyController::class,'create'])->name('addcompany');
Route::get('/companyedit/{id}',[CompanyController::class,'edit']);
Route::post('updatecompany',[CompanyController::class,'update'])->name('updatecompany');
Route::get('/deletedata1/{id}',[CompanyController::class,'destroy']);
Route::get('companyadd',[CompanyController::class,'index'])->name('companyadd');


});

Route::get('/login',[AdminController::class,'login'])->name('login');
Route::post('admin/auth',[AdminController::class,'auth'])->name('admin.auth');

// Route::get('/', function () {
//     return view('admin.login');
// });
