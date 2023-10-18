<?php
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MajorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use GuzzleHttp\Middleware;

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

Route::group(['middleware'=>['auth','role:admin']],function(){

    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('dashboard/users',[DashboardController::class,'viewusers'])->name('users');
    Route::get('dashboard/doctors',[DashboardController::class,'viewdoctors'])->name('doctorsview');
    Route::get('dashboard/majors',[DashboardController::class,'viewmajors'])->name('majorsview');
    Route::get('dashboard/booking',[DashboardController::class,'viewbooks'])->name('booking');
    Route::get('dashboard/contacts',[DashboardController::class,'viewcontacts'])->name('contactsview');
    Route::get('dashboard/createuser',[DashboardController::class,'NewUser'])->name('createuser');
    Route::post('dashboard/createuser/send',[usercontroller::class,'create'])->name('new_user');
    Route::get('dashboard/user/remove',[usercontroller::class,'remove'])->name('removeuser');
    Route::delete('dashboard/user/remove/sendingid',[usercontroller::class,'destroy'])->name('destroyuser');
    Route::get('dashboard/doctors/create',[DashboardController::class,'createdoctor'])->name('createdoctor');
    Route::post('dashboard/doctors/create/sending',[DoctorController::class,'create'])->name('new_doctor');
    Route::get('dashboard/doctors/delete',[DashboardController::class,'removedoctor'])->name('removedoctor');
    Route::delete('dashboard/doctors/delete/sendingid',[DoctorController::class,'destroy'])->name('destroydoctor');
    Route::get('dashboard/doctors/update',[DashboardController::class,'updatedoctor'])->name('updatedoctor');
    Route::put('dashboard/doctors/update/sendingdata',[DoctorController::class,'edit'])->name('editdoctor');
    Route::get('dashboard/majors/create',[DashboardController::class,'createmajor'])->name('new_major');
    Route::post('dashboard/majors/create/sending',[MajorController::class,'create'])->name('createmajor');
    Route::get('dashboard/majors/delete',[DashboardController::class,'removemajor'])->name('removemajor');
    Route::delete('dashboard/majors/delete/sendingid',[MajorController::class,'destroy'])->name('destroymajor');
    Route::get('dashboard/majors/update',[DashboardController::class,'updatemajor'])->name('updatemajor');
    Route::put('dashboard/majors/update/sendingdata',[MajorController::class,'edit'])->name('editmajor');
    Route::get('dashboard/booking/{id}',[DashboardController::class,'updatebooking'])->name('updatebooking');
    Route::put('dashboard/booking/edit/{id}',[BookingController::class,'edit'])->name('bookingedit');
    Route::delete('dashboard/contacts/delete/{id}',[ContactController::class,'destroy'])->name('destroycontact');
    Route::get('dashboard/users/update',[DashboardController::class,'updateuser'])->name('updateuser');
    Route::put('dashboard/users/update/sendingdata',[usercontroller::class,'edit'])->name('edituser');
});
//
//
Route::post('doctors/confirmbooking',[BookingController::class,'create'])->name('confirmbooking');
Route::post('logout', [usercontroller::class,'logout'])->name('logout');
Route::post('/register/newuser',[usercontroller::class,'create'])->name('register.create');
Route::get('/',[HomeController::class,'index']);
Route::get('home',[HomeController::class,'index'])->name('home');
Route::get('majors',[MajorController::class,'index'])->name('majors');
Route::get('login',[usercontroller::class,'viewlogin'])->name('login');
Route::get('register',[usercontroller::class,'register'])->name('register');
Route::get('contact',[ContactController::class,'index'])->name('contact');
Route::get('doctors',[DoctorController::class,'index'])->name('doctors');
Route::get('majors/{id}',[DoctorController::class,'ShowByMajor'])->name('major');
Route::get('doctors/{id}',[DoctorController::class,'show'])->name('doctor');
Route::post('contact/new',[ContactController::class,'create'])->name('new_contact');
Route::get('login/verify',[usercontroller::class,'login'])->name('verifylogin');


