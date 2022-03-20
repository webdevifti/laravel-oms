<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BranchController;
use App\Http\Controllers\admin\OrganizationController;
use App\Http\Controllers\admin\PackageController;
use App\Http\Controllers\admin\PackageFeatureController;
use App\Http\Controllers\admin\PackageModeController;
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

// Package
Route::get('/admin/package/list', [PackageController::class, 'index'])->name('package.list');
Route::get('/admin/package/add', [PackageController::class, 'create'])->name('package.create');
Route::post('/admin/package/store', [PackageController::class, 'store'])->name('package.store');
Route::post('/admin/package/update', [PackageController::class, 'update'])->name('package.update');
Route::get('/admin/package/statuschanege', [PackageController::class, 'statusChange']);
Route::get('/admin/package/delete/{id}', [PackageController::class, 'delete'])->name('package.delete');

// Package Mode
Route::get('/admin/package/mode', [PackageModeController::class, 'mode'])->name('package.mode');
Route::post('/admin/package/mode/create', [PackageModeController::class, 'createMode'])->name('admin.package.mode.create');
Route::post('/admin/package/mode/edit', [PackageModeController::class, 'update'])->name('package.mode.update');
Route::get('/admin/package/mode/statuschanege', [PackageModeController::class, 'statusChange']);
Route::get('/admin/package/mode/delete/{id}', [PackageModeController::class, 'delete'])->name('package.mode.delete');

// Package Feature
Route::get('/admin/package/feature', [PackageFeatureController::class, 'index'])->name('package.feature');
Route::post('/admin/package/feature/create', [PackageFeatureController::class, 'create'])->name('package.feature.create');
Route::post('/admin/package/feature/edit', [PackageFeatureController::class, 'update'])->name('package.feature.update');
Route::get('/admin/package/feature/statuschanege', [PackageFeatureController::class, 'statusChange']);
Route::get('/admin/package/feature/delete/{id}', [PackageFeatureController::class, 'delete'])->name('package.feature.delete');