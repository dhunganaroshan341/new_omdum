<?php

use App\Http\Controllers\Admin\CallToActionController;
use App\Http\Controllers\Admin\ServiceQueryController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\UserFrontendController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\FrontendController as AdminFrontendController;
use App\Http\Controllers\Admin\GalleryAlbumController;
use App\Http\Controllers\Admin\GalleryMediaController;
use App\Http\Controllers\Admin\PageBannerController;
use App\Http\Controllers\FrontGalleryController;
use App\Http\Controllers\SamplePageController;

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
//     return view('home');
// });

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
        return redirect()->route('first.index');
    });
});


// User

Route::middleware('admin')->group(function () {

    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');

    Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user');
    Route::post('/admin/user/reset-password/{id}', [UserController::class, 'passwordReset'])->name('admin.user.reset-password');
    Route::post('/admin/user/store', [UserController::class, 'store'])->name('admin.store');
    Route::get('/admin/user/detail/{id}', [UserController::class, 'userDetail'])->name('admin.detail');
    Route::post('/admin/user/update/{id}', [UserController::class, 'update'])->name('admin.update');
    Route::get('/admin/user/delete/{id}', [UserController::class, 'destory'])->name('admin.destory');

    // Home Slide
    Route::get('/admin/home-slide', [HomeSliderController::class, 'index'])->name('admin.homeslide');
    Route::post('/admin/home-slide/store', [HomeSliderController::class, 'store'])->name('admin.homeslide.store');
    Route::get('/admin/home-slide/detail/{id}', [HomeSliderController::class, 'getHomeSliderDetail'])->name('admin.homeslide.detail');
    Route::post('/admin/home-slide/update/{id}', [HomeSliderController::class, 'update'])->name('admin.homeslide.update');
    Route::get('/admin/home-slide/delete/{id}', [HomeSliderController::class, 'destory'])->name('admin.homeslide.destory');
    Route::get('/admin/home-slide/status/{id}', [HomeSliderController::class, 'statusToggle'])->name('admin.homeslide.status');


    // FrontEnd
    Route::get('/admin/front-end', [AdminFrontendController::class, 'index'])->name('admin.frontend');
    Route::post('/admin/front-end', [AdminFrontendController::class, 'update'])->name('admin.frontend.update');

    // Site Datas
    Route::get('/admin/site-data', [AdminFrontendController::class, 'siteData'])->name('admin.siteData');
    Route::post('/admin/site-data', [AdminFrontendController::class, 'updateSiteData'])->name('admin.updateSiteData');


    // Setting
    Route::get('/admin/setting', [SettingController::class, 'index'])->name('admin.setting');
    Route::post('/admin/setting', [SettingController::class, 'store'])->name('admin.store.setting');
    Route::get('/admin/setting/working/{id}', [SettingController::class, 'destroyWorking']);
    Route::post('/admin/setting/working', [SettingController::class, 'addWorking']);
    // Route::resource('users',UserController::class);

    // Testimonial
    Route::get('/admin/testimonial', [TestimonialController::class, 'index'])->name('admin.testimonial');
    Route::post('/admin/testimonial/store', [TestimonialController::class, 'store'])->name('admin.testimonial.store');
    Route::get('/admin/testimonial/detail/{id}', [TestimonialController::class, 'showDetail'])->name('admin.testimonial.detail');
    Route::post('/admin/testimonial/update/{id}', [TestimonialController::class, 'update'])->name('admin.testimonial.update');
    Route::get('/admin/testimonial/delete/{id}', [TestimonialController::class, 'destory'])->name('admin.testimonial.destory');
    Route::get('/admin/testimonial/status/{id}', [TestimonialController::class, 'statusToggle'])->name('admin.testimonial.status');


    // Category
    Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/admin/category/detail/{id}', [CategoryController::class, 'detailCategory'])->name('admin.category.detail');
    Route::post('/admin/category/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::get('/admin/category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destory');
    Route::get('/admin/category/status/{id}', [CategoryController::class, 'statusToggle'])->name('admin.category.status');


    // Post
    Route::get('/admin/post', [PostController::class, 'index'])->name('admin.post');
    Route::get('/admin/post/get-data', [PostController::class, 'getPostData'])->name('admin.post.data');
    Route::post('/admin/post/store', [PostController::class, 'store'])->name('admin.post.store');
    Route::get('/admin/post/detail/{id}', [PostController::class, 'getDetail'])->name('admin.post.detail');
    Route::post('/admin/post/edit/{id}', [PostController::class, 'update'])->name('admin.post.update');
    Route::get('/admin/post/delete/{id}', [PostController::class, 'destroy']);
    Route::get('/admin/post/image/delete', [PostController::class, 'destoryImage']);
    Route::get('/admin/post/status/{id}', [PostController::class, 'statusToggle'])->name('admin.post.status');
    Route::get('/admin/post/comment/detail/{id}', [PostController::class, 'postComment'])->name('admin.post.comment');

    Route::get('/admin/contact', [ContactController::class, 'index'])->name('admin.contact');
    Route::get('/admin/contact/get-data', [ContactController::class, 'getContact'])->name('admin.contact.get-data');
    Route::get('/admin/contact/detail/{id}', [ContactController::class, 'showDetail'])->name('admin.contact.detail');
    Route::get('/admin/contact/delete/{id}', [ContactController::class, 'destroy'])->name('admin.contact.delete');

Route::get('/admin/service-query', [ServiceQueryController::class, 'index'])->name('admin.service-query');
Route::get('/admin/service-query/get-data', [ServiceQueryController::class, 'getServiceQuery'])->name('admin.service-query.get-data');
Route::get('/admin/service-query/detail/{id}', [ServiceQueryController::class, 'showDetail'])->name('admin.service-query.detail');
Route::get('/admin/service-query/delete/{id}', [ServiceQueryController::class, 'destroy'])->name('admin.service-query.delete');

    Route::resource('/admin/notice', NoticeController::class);
    Route::get('/admin/notice/status/{id}', [NoticeController::class, 'toggleStatus']);

    Route::resource('admin/service', ServiceController::class);
    Route::get('/admin/service/status/{id}', [ServiceController::class, 'toggleStatus']);
// gallery albums and media
// Route::get('gallery-album',[GalleryAlbumController::class,'index'])->name('gallery-album.index');
// Route::post('gallery-album/store',[GalleryAlbumController::class,'store'])->name('gallery-album.store');
// Route::put('gallery-album/update/{id}',[GalleryAlbumController::class,'update'])->name('gallery-album.update');
// Route::delete('gallery-album/delete/{id}',[GalleryAlbumController::class,'destroy'])->name('gallery-album.delete');
Route::prefix('admin')->name('admin.')->group(function () {
// callto action
Route::resource('call-to-action',CallToActionController::class);
Route::post('call-to-action/image/delete',[CallToActionController::class,'destroyImage'])->name('call-to-action.destroyImage');
Route::put('/call-to-action/{id}/status', [CallToActionController::class, 'statusToggle'])->name('call-to-action.status');
Route::get('/get-call-to-action-data', [CallToActionController::class, 'all'])->name('call-to-action.all');
// end of cta
    // Gallery Album Resource Routes
    Route::get('/gallery-albums', [GalleryAlbumController::class, 'index'])->name('gallery-albums.index');
    Route::get('/gallery-albums/data', [GalleryAlbumController::class, 'getData'])->name('gallery-albums.data');
    Route::post('/gallery-albums/{id}/upload', [GalleryAlbumController::class, 'upload'])->name('gallery-albums.store');
    Route::post('/gallery-albums', [GalleryAlbumController::class, 'store'])->name('gallery-albums.store');
    Route::get('/gallery-albums/{id}/detail', [GalleryAlbumController::class, 'detailGalleryAlbum'])->name('gallery-albums.detail');
    Route::put('/gallery-albums/{id}', [GalleryAlbumController::class, 'update'])->name('gallery-albums.update');
    Route::delete('/gallery-albums/{id}', [GalleryAlbumController::class, 'destroy'])->name('gallery-albums.destroy');
    Route::get('/gallery-albums/image/delete', [GalleryAlbumController::class, 'destroyGalleryImage'])->name('gallery-albums.gallery-image.destroy');;
    Route::put('/gallery-albums/{id}/status', [GalleryAlbumController::class, 'statusToggle'])->name('gallery-albums.status');

// page Banner
    Route::resource('page-banner', PageBannerController::class);
    Route::put('/page-banner/{id}/status', [PageBannerController::class, 'statusToggle'])->name('page-banner.status');

});
Route::prefix('/admin/gallery-media')->name('admin.gallery-media.')->group(function () {
    Route::get('/', [GalleryMediaController::class, 'index'])->name('index');
    Route::get('/data', [GalleryMediaController::class, 'getGalleryData'])->name('data');
    Route::post('/store', [GalleryMediaController::class, 'store'])->name('store');
    Route::get('/detail/{id}', [GalleryMediaController::class, 'getDetail'])->name('detail');
    Route::get('edit/{id}', [GalleryMediaController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [GalleryMediaController::class, 'update'])->name('update');
    Route::post('/toggle-status/{id}', [GalleryMediaController::class, 'statusToggle'])->name('toggleStatus');
    Route::post('/upload/{id?}', [GalleryMediaController::class, 'upload'])->name('gallery-media.upload');
    Route::get('/image/delete', [GalleryMediaController::class, 'destoryImage']);

    Route::delete('/delete/{id}', [GalleryMediaController::class, 'destroy'])->name('delete');
});


Route::resource('/admin/demo', UserController::class);

    Route::get('/admin/post/detail/{id}', [PostController::class, 'getDetail'])->name('admin.post.detail');

    Route::get('/admin/post/delete/{id}', [PostController::class, 'destroy']);
    Route::get('/admin/post/image/delete', [PostController::class, 'destoryImage']);
    Route::get('/admin/post/status/{id}', [PostController::class, 'statusToggle'])->name('admin.post.status');
    Route::get('/admin/post/comment/detail/{id}', [PostController::class, 'postComment'])->name('admin.post.comment');

// end of gallery media
    Route::resource('admin/client', ClientController::class);
    Route::get('/admin/client/status/{id}', [ClientController::class, 'toggleStatus']);

    Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
});

Route::get('/home',function(){
    return view('frontend.home');
})
;
Route::get('/', [UserFrontendController::class, 'home'])->name('home');
Route::get('/about', [UserFrontendController::class, 'about'])->name('about');
Route::get('/booking', [UserFrontendController::class, 'booking'])->name('booking');
Route::get('/flight-booking', [UserFrontendController::class, 'flightBooking'])->name('flight-booking');
Route::get('/car-booking', [UserFrontendController::class, 'carBooking'])->name('car-booking');
Route::get('/blogs', [UserFrontendController::class, 'blogList'])->name('blog-list');
Route::get('/contact', [UserFrontendController::class, 'contact'])->name('contact');
Route::get('/cart', [UserFrontendController::class, 'cart'])->name('cart');
Route::get('/checkout', [UserFrontendController::class, 'checkout'])->name('checkout');
Route::get('/blog/grid', [UserFrontendController::class, 'blogGrid'])->name('blog.grid');
Route::get('/blog/single', [UserFrontendController::class, 'blogSingle'])->name('blog.single');
Route::get('/destination/grid', [UserFrontendController::class, 'destinationGrid'])->name('destination.grid');
Route::get('/destination/full', [UserFrontendController::class, 'destinationFull'])->name('destination.full');
Route::get('/destination/list', [UserFrontendController::class, 'destinationList'])->name('destination.list');
Route::get('/destination/single', [UserFrontendController::class, 'destinationSingle'])->name('destination.single');

Route::get('/pages/404-1', [SamplePageController::class, 'NotFoundBladePage'])->name('pages.404-1');

Route::get('/pages/about', [SamplePageController::class, 'aboutBladePage'])->name('pages.about');

Route::get('/pages/blog-full', [SamplePageController::class, 'blog_fullBladePage'])->name('pages.blog-full');

Route::get('/pages/blog-grid', [SamplePageController::class, 'blog_gridBladePage'])->name('pages.blog-grid');

Route::get('/pages/blog-left', [SamplePageController::class, 'blog_leftBladePage'])->name('pages.blog-left');

Route::get('/pages/blog-list', [SamplePageController::class, 'blog_listBladePage'])->name('pages.blog-list');

Route::get('/pages/blog-masonry', [SamplePageController::class, 'blog_masonryBladePage'])->name('pages.blog-masonry');

Route::get('/pages/blog-single-full', [SamplePageController::class, 'blog_single_fullBladePage'])->name('pages.blog-single-full');

Route::get('/pages/blog-single', [SamplePageController::class, 'blog_singleBladePage'])->name('pages.blog-single');

Route::get('/pages/booking', [SamplePageController::class, 'bookingBladePage'])->name('pages.booking');

Route::get('/pages/car-booking', [SamplePageController::class, 'car_bookingBladePage'])->name('pages.car-booking');

Route::get('/pages/car-detail', [SamplePageController::class, 'car_detailBladePage'])->name('pages.car-detail');

Route::get('/pages/car-grid', [SamplePageController::class, 'car_gridBladePage'])->name('pages.car-grid');

Route::get('/pages/car-list', [SamplePageController::class, 'car_listBladePage'])->name('pages.car-list');

Route::get('/pages/cart', [SamplePageController::class, 'cartBladePage'])->name('pages.cart');

Route::get('/pages/checkout', [SamplePageController::class, 'checkoutBladePage'])->name('pages.checkout');

Route::get('/pages/confirmation', [SamplePageController::class, 'confirmationBladePage'])->name('pages.confirmation');

Route::get('/pages/contact', [SamplePageController::class, 'contactBladePage'])->name('pages.contact');

Route::get('/pages/dashboard-add-new', [SamplePageController::class, 'dashboard_add_newBladePage'])->name('pages.dashboard-add-new');

Route::get('/pages/dashboard-history', [SamplePageController::class, 'dashboard_historyBladePage'])->name('pages.dashboard-history');

Route::get('/pages/dashboard-list', [SamplePageController::class, 'dashboard_listBladePage'])->name('pages.dashboard-list');

Route::get('/pages/dashboard-messages', [SamplePageController::class, 'dashboard_messagesBladePage'])->name('pages.dashboard-messages');

Route::get('/pages/dashboard-my-profile', [SamplePageController::class, 'dashboard_my_profileBladePage'])->name('pages.dashboard-my-profile');

Route::get('/pages/dashboard-reviews', [SamplePageController::class, 'dashboard_reviewsBladePage'])->name('pages.dashboard-reviews');

Route::get('/pages/dashboard', [SamplePageController::class, 'dashboardBladePage'])->name('pages.dashboard');

Route::get('/pages/destination-full', [SamplePageController::class, 'destination_fullBladePage'])->name('pages.destination-full');

Route::get('/pages/destination-grid', [SamplePageController::class, 'destination_gridBladePage'])->name('pages.destination-grid');

Route::get('/pages/destination-left', [SamplePageController::class, 'destination_leftBladePage'])->name('pages.destination-left');

Route::get('/pages/destination-list', [SamplePageController::class, 'destination_listBladePage'])->name('pages.destination-list');

Route::get('/pages/destination-masonry', [SamplePageController::class, 'destination_masonryBladePage'])->name('pages.destination-masonry');

Route::get('/pages/destination-single-full', [SamplePageController::class, 'destination_single_fullBladePage'])->name('pages.destination-single-full');

Route::get('/pages/destination-single', [SamplePageController::class, 'destination_singleBladePage'])->name('pages.destination-single');

Route::get('/pages/destination-single1', [SamplePageController::class, 'destination_single1BladePage'])->name('pages.destination-single1');

Route::get('/pages/faq', [SamplePageController::class, 'faqBladePage'])->name('pages.faq');

Route::get('/pages/flight-booking', [SamplePageController::class, 'flight_bookingBladePage'])->name('pages.flight-booking');

Route::get('/pages/flight-detail', [SamplePageController::class, 'flight_detailBladePage'])->name('pages.flight-detail');

Route::get('/pages/flight-grid', [SamplePageController::class, 'flight_gridBladePage'])->name('pages.flight-grid');

Route::get('/pages/flight-list', [SamplePageController::class, 'flight_listBladePage'])->name('pages.flight-list');

Route::get('/pages/forgot-password', [SamplePageController::class, 'forgot_passwordBladePage'])->name('pages.forgot-password');

Route::get('/pages/gallery', [SamplePageController::class, 'galleryBladePage'])->name('pages.gallery');

Route::get('/pages/gallery1', [SamplePageController::class, 'gallery1BladePage'])->name('pages.gallery1');

Route::get('/pages/hotel-booking', [SamplePageController::class, 'hotel_bookingBladePage'])->name('pages.hotel-booking');

Route::get('/pages/hotel-detail', [SamplePageController::class, 'hotel_detailBladePage'])->name('pages.hotel-detail');

Route::get('/pages/hotel-grid', [SamplePageController::class, 'hotel_gridBladePage'])->name('pages.hotel-grid');

Route::get('/pages/hotel-list', [SamplePageController::class, 'hotel_listBladePage'])->name('pages.hotel-list');

Route::get('/pages/index-1', [SamplePageController::class, 'index_1BladePage'])->name('pages.index-1');

Route::get('/pages/index-2', [SamplePageController::class, 'index_2BladePage'])->name('pages.index-2');

Route::get('/pages/index-3', [SamplePageController::class, 'index_3BladePage'])->name('pages.index-3');

Route::get('/pages/index-car', [SamplePageController::class, 'index_carBladePage'])->name('pages.index-car');

Route::get('/pages/index-flight', [SamplePageController::class, 'index_flightBladePage'])->name('pages.index-flight');

Route::get('/pages/index-hotel', [SamplePageController::class, 'index_hotelBladePage'])->name('pages.index-hotel');

Route::get('/pages/index-train', [SamplePageController::class, 'index_trainBladePage'])->name('pages.index-train');

Route::get('/pages/index', [SamplePageController::class, 'indexBladePage'])->name('pages.index');

Route::get('/pages/login', [SamplePageController::class, 'loginBladePage'])->name('pages.login');

Route::get('/pages/pricing', [SamplePageController::class, 'pricingBladePage'])->name('pages.pricing');

Route::get('/pages/shop-detail', [SamplePageController::class, 'shop_detailBladePage'])->name('pages.shop-detail');

Route::get('/pages/shop-grid1', [SamplePageController::class, 'shop_grid1BladePage'])->name('pages.shop-grid1');

Route::get('/pages/shop-list1', [SamplePageController::class, 'shop_list1BladePage'])->name('pages.shop-list1');

Route::get('/pages/testimonial', [SamplePageController::class, 'testimonialBladePage'])->name('pages.testimonial');

Route::get('/pages/train-booking', [SamplePageController::class, 'train_bookingBladePage'])->name('pages.train-booking');

Route::get('/pages/train-detail', [SamplePageController::class, 'train_detailBladePage'])->name('pages.train-detail');

Route::get('/pages/train-grid', [SamplePageController::class, 'train_gridBladePage'])->name('pages.train-grid');

Route::get('/pages/train-list', [SamplePageController::class, 'train_listBladePage'])->name('pages.train-list');

Route::get('/pages/wishlist', [SamplePageController::class, 'wishlistBladePage'])->name('pages.wishlist');
Route::get('/pages/services', [SamplePageController::class, 'servicesPage'])->name('pages.services');
