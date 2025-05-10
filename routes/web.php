<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookTableController;
use App\Http\Controllers\PilihKursiController;
use App\Http\Controllers\IndexAdminController;
use App\Http\Controllers\PagesContactController;
use App\Http\Controllers\PagesLoginController;
use App\Http\Controllers\PagesRegisterController;
use App\Http\Controllers\TablesDataController;
use App\Http\Controllers\TablesGeneralController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\KelolaEventController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AdminReservationController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\HistoriController;





Route::middleware('auth')->group(function () {
    // Booking & Payment
    Route::get('/pilih-kursi', [BookingController::class, 'index'])->name('pilih-kursi');
    Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
    Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
    Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');

    // Admin Routes
    Route::middleware('admin')->group(function () {
        Route::get('/admin/tables-data', [AdminController::class, 'index'])->name('admin.tables-data');
        Route::put('/admin/booking/confirm/{id}', [AdminController::class, 'confirm'])->name('admin.booking.confirm');
        Route::put('/admin/booking/cancel/{id}', [AdminController::class, 'cancel'])->name('admin.booking.cancel');
        Route::put('/admin/booking/cancel/{id}', [AdminController::class, 'cancel'])->name('admin.booking.cancel');
        Route::delete('/admin/booking/delete-all', [AdminController::class, 'deleteAll'])->name('admin.booking.deleteAll');


    });
    
});


// Tables Data (Admin View)
Route::get('/tables-data', [TablesDataController::class, 'index'])->name('tables-data');


Route::middleware(['auth'])->group(function () {
    Route::get('/reservation', [ReservationController::class, 'form'])->name('reservation.form');
    Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
});

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/kelola-reservation', [AdminReservationController::class, 'index'])->name('admin.index');
    Route::patch('/admin/kelola-reservation/{id}', [AdminReservationController::class, 'update'])->name('admin.update');
});


Route::get('/indexadmin', [IndexAdminController::class, 'index']);
Route::get('/pages-contact', [PagesContactController::class, 'index']);
Route::get('/tables-data', [TablesDataController::class, 'index'])->name('tables-data');
Route::get('/footer', [FooterController::class, 'index'])->name('footer');



    Route::get('/kelola-event', [KelolaEventController::class, 'index'])->name('kelola-event');
    Route::post('/kelola-event/store', [KelolaEventController::class, 'store'])->name('kelola-event.store');
    Route::post('/kelola-event/{id}', [KelolaEventController::class, 'update'])->name('kelola-event.update');
    Route::delete('/kelola-event/{event}', [KelolaEventController::class, 'destroy'])->name('kelola-event.destroy');

    







Route::get('/index', function () {
    return view('index');
})->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


    Route::get('/book-table', [BookTableController::class, 'index'])->name('book.table')->middleware('auth');
    Route::get('/book-table', [KelolaEventController::class, 'showEvents'])->name('book-table')->middleware('auth');

    Route::get('/', [KelolaEventController::class, 'publicEvents'])->name('index');




Route::get('/pilihkursi', [PilihKursiController::class, 'index'])->name('pilihkursi');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route to get booking history for the logged-in user
Route::get('/admin/get-booking-history', [AdminController::class, 'getBookingHistory'])->name('admin.getBookingHistory');

Route::get('/notifikasi-user', [BookingController::class, 'getNotifikasiUser'])
    ->middleware('auth')
    ->name('load-notifikasi');

    Route::get('/notifikasi-reservation', [AdminReservationController::class, 'getNotifikasiReservation'])->name('notif.reservation');



    Route::get('/kelola-menu', [MakananController::class, 'index'])->name('kelola-menu.index');
    Route::post('/kelola-menu', [MakananController::class, 'store'])->name('kelola-menu.store');
    Route::put('/kelola-menu/{id}', [MakananController::class, 'update'])->name('kelola-menu.update');
    // Route::delete('/kelola-menu/{id}', [MakananController::class, 'destroy'])->name('kelola-menu.destroy');
    Route::delete('/kelola-menu/{makanan}', [MakananController::class, 'destroy'])->name('kelola-menu.destroy');

    

    Route::get('/menu', [MenuController::class, 'index'])->name('menu');

    Route::get('/histori', [HistoriController::class, 'index'])->name('histori');

    Route::get('/akun', function () {
        return view('akun');
    })->middleware('auth')->name('akun');
    
    