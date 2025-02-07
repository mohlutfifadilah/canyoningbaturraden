<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PackageTourController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimoniController;
use App\Models\Carousel;
use App\Models\Package;
use App\Models\Testimoni;
use App\Models\User;
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
    $user = User::find(1);
    $carousel = Carousel::all();
    $package = Package::all();
    $testimonial = Testimoni::all();
    return view('main', compact(
        'user',
        'carousel',
        'package',
        'testimonial',
    ));
});
Route::get('/package-tour', [PackageTourController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/faqs', function () {
    return view('faqs');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

# Admin
Route::middleware(['Auth'])->group(function(){

    # Dashboard
    Route::get('/dashboard',  [DashboardController::class, 'index']);

    // # Profil
    Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])->name('profil-edit');
    Route::put('/profile/update/{id}', [ProfileController::class, 'update'])->name('profil-update');

    Route::get('/changePassword/{id}', [ChangePassword::class, 'change'])->name('change-password');
    Route::put('/changePassword/{id}', [ChangePassword::class, 'update'])->name('update-password');

    // Package
    Route::resource('package', PackageController::class);
    Route::resource('detailPackage', DetailController::class);

    // // mobil
    // Route::resource('mobil', MobilController::class);
    // Route::get('/download-brosur/{id}', function($id) {
    //     return response()->download(storage_path('app/brosur/' . $id));
    // })->name('download-brosur');

    // FAQ
    Route::resource('faq', FaqController::class);

    // // varian
    // Route::resource('varian', VarianController::class);

    // testimoni
    Route::resource('testimoni', TestimoniController::class);

    // carousel
    Route::resource('carousel', CarouselController::class);

    // // invoice
    // Route::resource('invoice', InvoiceController::class);
    // Route::post('/submit_tarif/{id}', [InvoiceController::class, 'submit_tarif'])->name('submit_tarif');

    // // riwayat
    // Route::resource('riwayat', RiwayatController::class);
    // Route::get('/cetak_invoice/{id}', [RiwayatController::class, 'cetak_invoice'])->name('cetak_invoice');
    // Route::post('/riwayat_paid/{id}', [RiwayatController::class, 'riwayat_paid'])->name('riwayat_paid');
    // Route::get('/export-excel', [RiwayatController::class, 'export_excel'])->name('riwayat-export-excel');
    // Route::get('/export-pdf', [RiwayatController::class, 'export_pdf'])->name('riwayat-export-pdf');
});
