<?php

use App\Http\Controllers\Admin\ItineraryController;
use App\Http\Controllers\Admin\TourPackageImageController;
use App\Http\Controllers\Admin\TourPackageVideoController;
use App\Http\Controllers\FrontGalleryController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\UserFrontendController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\TourPackageController as AdminTourPackageController;
use App\Http\Controllers\Frontend\TourPackageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Authentication Routes
Route::middleware('isLogin')->group(function () {
    Route::get('/register', [AuthController::class, 'index'])->name('register');
    Route::post('/register', [AuthController::class, 'storeRegister'])->name('register.store');
    Route::get('/realm-admin/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login/store', [AuthController::class, 'storeLogin'])->name('login.store');
    Route::get('/auth/google/redirect', function () {
        return Socialite::driver("google")->redirect();
    })->name('google.redirect');
    Route::get('/auth/google/callback', function (Request $request) {
        $userdata = Socialite::driver("google")->user();
        $user = User::updateOrCreate(
            ['google_id' => $userdata->id,],
            [
                'full_name' => $userdata->name,
                'email' => $userdata->email,
                'role' => 'User',
                'image' => $userdata->avatar,
            ]
        );
        Auth::login($user);
        return redirect()->route('home');
    });
});

// Admin Routes
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard.index');

    // User Management
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::post('/user/reset-password/{id}', [UserController::class, 'passwordReset'])->name('user.reset-password');
    Route::post('/user/store', [UserController::class, 'store'])->name('store');
    Route::get('/user/detail/{id}', [UserController::class, 'userDetail'])->name('detail');
    Route::post('/user/update/{id}', [UserController::class, 'update'])->name('update');
    Route::get('/user/delete/{id}', [UserController::class, 'destory'])->name('destory');

    // Tour Packages
    Route::prefix('tour-packages')->name('tour-packages.')->group(function () {
        Route::get('/', [AdminTourPackageController::class, 'index'])->name('index');
        Route::get('/show/{id}', [AdminTourPackageController::class, 'show'])->name('show');
        Route::post('/store', [AdminTourPackageController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [AdminTourPackageController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [AdminTourPackageController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [AdminTourPackageController::class, 'destroy'])->name('destroy');
        Route::post('/status/{id}', [AdminTourPackageController::class, 'statusToggle'])->name('status');
    });

    // Itineraries
    Route::prefix('itineraries')->name('itineraries.')->group(function () {
        Route::get('/{id}', [ItineraryController::class, 'index'])->name('index');
        Route::get('/show/{id}', [ItineraryController::class, 'show'])->name('show');
        Route::post('/store', [ItineraryController::class, 'store'])->name('store');
        Route::post('/update/{id}', [ItineraryController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [ItineraryController::class, 'destroy'])->name('destroy');
    });

    // Tour Package Images
    Route::prefix('tour-package-images')->name('tour-package-images.')->group(function () {
        Route::get('/{tour_package_id}', [TourPackageImageController::class, 'index'])->name('index');
        Route::post('/store', [TourPackageImageController::class, 'store'])->name('store');
        Route::delete('/delete/{id}', [TourPackageImageController::class, 'destroy'])->name('destroy');
    });

    // Tour Package Videos
    Route::prefix('tour-package-videos')->name('tour-package-videos.')->group(function () {
        Route::get('/{tour_package_id}', [TourPackageVideoController::class, 'index'])->name('index');
        Route::post('/store', [TourPackageVideoController::class, 'store'])->name('store');
        Route::delete('/delete/{id}', [TourPackageVideoController::class, 'destroy'])->name('destroy');
    });

    // Contact Messages
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/contact/get-data', [ContactController::class, 'getContact'])->name('contact.get-data');
    Route::get('/contact/detail/{id}', [ContactController::class, 'showDetail'])->name('contact.detail');
    Route::get('/contact/delete/{id}', [ContactController::class, 'destroy'])->name('contact.delete');

    // Settings
    Route::get('/setting', [SettingController::class, 'index'])->name('setting');
    Route::post('/setting', [SettingController::class, 'store'])->name('store.setting');

    // Bookings
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Frontend Routes
// Homepage
Route::get('/', [UserFrontendController::class, 'home'])->name('home');

// Static Pages
Route::get('/about', [UserFrontendController::class, 'aboutUs'])->name('about');
Route::get('/services', [UserFrontendController::class, 'service'])->name('services');
Route::get('/contact', [UserFrontendController::class, 'contactUs'])->name('contact');
Route::post('/contact', [UserFrontendController::class, 'storeContactUs'])->name('contact.store');

// Blog
Route::get('/blog', [UserFrontendController::class, 'blogGrid'])->name('blog');

// Packages
Route::get('/packages', [TourPackageController::class, 'index'])->name('packages.index');
Route::get('/packages/{slug}', [TourPackageController::class, 'show'])->name('packages.show');
Route::post('/packages/book', [TourPackageController::class, 'booking'])->name('packages.book');

Route::get('/gallery',[FrontGalleryController::class,'gallery'])->name('gallery');
