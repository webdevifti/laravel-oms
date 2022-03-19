<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BranchController;
use App\Http\Controllers\admin\OrganizationController;
use App\Http\Controllers\admin\PackageController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);
Route::get('/admin/dashboard',[AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/organization/list', [OrganizationController::class, 'organization'])->name('organization.list');
Route::get('/admin/organization/request/list', [OrganizationController::class, 'requestList'])->name('organization.request.list');
Route::get('/admin/organization/request/view', [OrganizationController::class, 'requestView'])->name('organization.request.view');
Route::get('/admin/branch/add', [BranchController::class, 'index'])->name('admin.branch');
Route::get('/admin/packages/list', [PackageController::class, 'index'])->name('package.list');
Route::get('/admin/package/add', [PackageController::class, 'create'])->name('package.create');
Route::get('/admin/package/mode', [PackageController::class, 'mode'])->name('package.mode');
