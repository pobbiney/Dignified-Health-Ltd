<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication\AuthenticationController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Settings\SettingsController;
use App\Http\Controllers\UserManagement\UserManagementController;
use App\Http\Controllers\userAuthentication\userAuthController;
use App\Http\Controllers\userProfile\ProfileController;


/* login Manager */
 
Route::get('admin/login',[AuthenticationController::class,'index'])->name('admin/login');

Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
/* Authentication */ 

Route::post('authentication-process',[AuthenticationController::class,'authenticationProcess'])->name('authentication-process');
Route::post('logout-authentication-process',[DashboardController::class,'logoutAuthenticationProcess'])->name('logout-authentication-process');


/* User Management */ 

Route::get('user-management-add-category',[UserManagementController::class,'userCategoryView'])->name('user-management-add-category');
Route::post('user-management-add-category-process',[UserManagementController::class,'userCategoryProcess'])->name('user-management-add-category-process');
Route::get('user-management-add-category-edit/{id}',[UserManagementController::class,'editUserCategoryView'])->name('user-management-add-category-edit');
Route::post('user-management-add-category-edit-process/{id}',[UserManagementController::class,'editUserCategoryProcess'])->name('user-management-add-category-edit-process');

Route::get('user-management-privilege',[UserManagementController::class,'assignUserPrivilegesView'])->name('user-management-privilege');
Route::post('get-category-privileges',[UserManagementController::class,'getUserPrivileges'])->name('get-category-privileges');
Route::post('save-user-privileges',[UserManagementController::class,'saveUserPrivileges'])->name('save-user-privileges');

Route::get('user-management-create-account',[UserManagementController::class,'createAccountUser'])->name('user-management-create-account');
Route::post('get-user-email-process',[UserManagementController::class,'getAccountEmail']);
Route::post('create-account-process',[UserManagementController::class,'createAccount'])->name('create-account-process');

Route::get('user-management-list-create-account',[UserManagementController::class,'listAccountsView'])->name('user-management-list-create-account');
Route::any('user-management-get-accounts',[UserManagementController::class,'getUserAccountList'])->name('user-management-get-accounts');

Route::get('user-management-edit-user-account/{id}',[UserManagementController::class,'editUserAccountView'])->name('user-management-edit-user-account');
Route::post('user-management-edit-user-account-process/{id}',[UserManagementController::class,'editUserAccountProcess'])->name('user-management-edit-user-account-process');

/* End User Management */ 
 
/* Website Management */
Route::get('Testimonial',[BackendController::class,'getTestimonialView'])->name('Testimonial');
Route::post('add-testimonial-process',[BackendController::class,'addTestimonial'])->name('add-testimonial-process');
Route::get('testimonial-id/{id}',[BackendController::class,'gettestimonialID'])->name('testimonial-id');
Route::post('edit-testimonial-process',[BackendController::class,'editTestimonial'])->name('edit-testimonial-process');
Route::get('Testimonial/{id}/delete', [BackendController::class, 'destroytestimonial']) ;
Route::get('Staff',[BackendController::class,'getStaffView'])->name('Staff');
Route::post('add-staff-process',[BackendController::class,'addStaff'])->name('add-staff-process');
Route::get('list-staff',[BackendController::class,'getStaffListView'])->name('list-staff');
Route::get('edit-staff/{id}',[BackendController::class,'editStaffView'])->name('edit-staff');
Route::post('edit-staff-process/{id}',[BackendController::class,'editStaff'])->name('edit-staff-process');
/* End of Website Management */

/*Website Frontend */
Route::get('/',[FrontendController::class,'gethomeView'])->name('home');

/*End of Website Frontend */