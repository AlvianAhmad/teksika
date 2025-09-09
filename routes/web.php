<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookingAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceAdminController;
use App\Http\Controllers\UserAdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RequestLayananController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\BookingExportController;


Route::get('/', function () {
    return view('welcome');
});

// Menu Login
Route::get('/login/menu_login', [AuthController::class, 'menuLogin'])->name('menu_login');


// Register
Route::get('/login/register', [AuthController::class, 'showRegister'])->name('register_form');
Route::post('/login/register', [CustomerAuthController::class, 'register'])->name('register');


// Route dashboard_user hanya satu, ke DashboardUserController
Route::get('/dashboard_admin', [ServiceController::class, 'index'])->name('dashboard_admin');
// Dashboard usar sama admin

Route::get('/admin/home', [ServiceController::class, 'index'])->name('admin.home');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
Route::put('/services/{service}', [ServiceController::class, 'update'])->name('services.update');
Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');



// admin routes
Route::get('/admin/booking', [BookingController::class, 'index'])->name('booking');
Route::post('/admin/booking/{id}/status', [BookingAdminController::class, 'updateStatus']);
Route::post('/admin/booking/{id}/terima', [BookingAdminController::class, 'terima']);
Route::get('/admin/transaksi', [App\Http\Controllers\Admin\TransaksiController::class, 'index'])->name('transaksi');
Route::get('/admin/worker', [AuthController::class, 'worker'])->name('worker');
Route::get('/admin/bookingadmin', [BookingAdminController::class, 'index'])->name('bookingadmin');
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboardadmin');
Route::get('/admin/services', [ServiceAdminController::class, 'index'])->name('servicesadmin');
Route::get('/admin/users', [UserAdminController::class, 'index'])->name('usersadmin');

// Admin chat routes
Route::get('/admin/chat', [ChatController::class, 'index'])->name('chat');
Route::post('/admin/chat/send', [ChatController::class, 'send'])->name('chat.send');


Route::get('/landingpageuser', [AuthController::class, 'landingpageuser'])->name('landingpageuser');

Route::get('/menu_login', function () {
    return view('login.menu_login');
});

// user routes
Route::get('/user/chatuser', [AuthController::class, 'chatuser'])->name('chatuser');
Route::get('/user/request', [AuthController::class, 'request'])->name('request');
Route::get('/booking', [App\Http\Controllers\BookingAdminController::class, 'index'])->name('booking'); // untuk admin
Route::get('/booking-user', [App\Http\Controllers\BookingUserController::class, 'index'])->name('bookinguser'); // untuk user
Route::post('/booking-user/{id}/batal', [App\Http\Controllers\BookingUserController::class, 'batal'])->name('bookinguser.batal');
Route::get('/request-layanan', [App\Http\Controllers\RequestLayananController::class, 'index'])->name('request.layanan');
Route::get('/user/profil_user', [AuthController::class, 'profil_user'])->name('profil_user');

Route::get('/user/transaksi_user', [\App\Http\Controllers\TransaksiUserController::class, 'indexUser'])->name('transaksi_user');

Route::get('/login', [UserAuthController::class, 'showLogin'])->name('login');
Route::post('/login', [UserAuthController::class, 'login'])->name('login.post');
Route::get('/register', [UserAuthController::class, 'showRegister'])->name('register');
Route::post('/register', [UserAuthController::class, 'register'])->name('register.post');
Route::get('/dashboard_user', [UserAuthController::class, 'dashboard'])->name('dashboard_user');

Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('/request', [RequestController::class, 'store'])->name('request.store');
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
Route::get('/request-layanan', [RequestLayananController::class, 'index'])->name('request.layanan');
Route::post('/request-layanan', [RequestController::class, 'store'])->name('request.store');
Route::get('/request', [RequestLayananController::class, 'index'])->name('request');
Route::post('/request', [RequestController::class, 'store'])->name('request.store');
Route::get('/dashboard-user', [DashboardUserController::class, 'index'])->name('dashboard_user');
Route::put('/user/update-profile', [App\Http\Controllers\UserAuthController::class, 'updateProfile'])->name('user.updateProfile');
Route::get('/admin/booking/{id}', [App\Http\Controllers\BookingAdminController::class, 'show'])->name('booking.detail');
Route::post('/admin/booking/{id}/konfirmasi', [App\Http\Controllers\BookingAdminController::class, 'konfirmasi'])->name('booking.konfirmasi');
Route::post('/admin/booking/{id}/tolak', [App\Http\Controllers\BookingAdminController::class, 'tolak'])->name('booking.tolak');

// User chat routes
Route::get('/chatuser', [ChatController::class, 'chatuser'])->name('chatuser');
Route::post('/chatuser/send', [ChatController::class, 'store'])->name('chatuser.send');


// Worker management
Route::resource('worker', App\Http\Controllers\WorkerController::class);
Route::get('/admin/worker', [App\Http\Controllers\WorkerController::class, 'index'])->name('worker');
Route::post('/admin/worker', [App\Http\Controllers\WorkerController::class, 'store'])->name('worker.store');
Route::put('/admin/worker/{id}', [WorkerController::class, 'update'])->name('worker.update');
Route::delete('/admin/worker/{id}', [WorkerController::class, 'destroy'])->name('worker.destroy');

//pembayaran
Route::get('/pembayaran', [PembayaranController::class, 'create'])->name('pembayaran.create');
Route::post('/pembayaran', [App\Http\Controllers\PembayaranController::class, 'store'])->middleware('auth')->name('pembayaran.store');
Route::get('/pembayaran/{kode}', [PembayaranController::class, 'show'])->name('pembayaran.show');
Route::put('/pembayaran/{kode}', [PembayaranController::class, 'update'])->name('pembayaran.update');
Route::match(['get', 'post'], '/request/preview', [PembayaranController::class, 'preview'])->name('request.preview');
Route::post('/request/payment', [App\Http\Controllers\RequestController::class, 'payment'])->name('request.payment');
Route::get('/admin/booking/export/pdf', [\App\Http\Controllers\BookingAdminController::class, 'exportPdf'])->name('booking.export.pdf');
Route::get('/export-booking-pdf', [BookingExportController::class, 'exportPDF'])->name('export.booking.pdf');




