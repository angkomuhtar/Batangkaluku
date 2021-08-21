<?php

use App\Http\Controllers\Dashboard\ArticleController;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\ContentController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DepartmentController;
use App\Http\Controllers\Dashboard\GalleryController;
use App\Http\Controllers\Dashboard\HumanResourcesController;
use App\Http\Controllers\Dashboard\PageController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LembagaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ArtikelController;
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
Route::group([''], function () {
    $locale = request()->query('lang', 'id');
    app()->setLocale($locale);
    Route::get('', [HomeController::class, 'index'])->name('home');

    Route::group(['prefix' => 'lembaga'], function () {
        Route::get('tentang', [LembagaController::class, 'tentang'])->name('lembaga.tentang');
        Route::get('struktur', [LembagaController::class, 'struktur'])->name('lembaga.struktur');
        Route::get('sdm', [LembagaController::class, 'sdm'])->name('lembaga.sdm');
    });


    Route::group(['prefix' => 'artikel/{type}'], function () {
        Route::get('',[ArtikelController::class,'index'])->name('artikel');
        Route::get('{id}-{title}',[ArtikelController::class,'detail'])->name('artikel.detail');
    });

    Route::group(['prefix' => 'layanan'], function () {
        Route::get('pelatihan', function () {
            return view('artikel.pelatihan');
        });
        Route::get('pertanian', function () {
            return view('artikel.pertanian');
        });
        Route::get('umum', function () {
            return view('artikel.umum');
        });
    });


    Route::group(['prefix' => 'satker'], function () {
        Route::get('spi', function () {
            return view('satker.spi');
        });
        Route::get('wbk', function () {
            return view('satker.wbk');
        });
        Route::get('ppid', function () {
            return view('satker.ppid');
        });
        Route::get('pengadaan', function () {
            return view('satker.pengadaan');
        });
        Route::get('perpustakaan', function () {
            return view('satker.perpustakaan');
        });
        Route::get('iso', function () {
            return view('satker.iso');
        });
    });

    Route::group(['prefix' => 'galeri'], function () {
        Route::get('photo',[GaleriController::class,'photo'])->name('gallery.photo');
        Route::get('video',[GaleriController::class,'video'])->name('gallery.video');
    });
});

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('', function () {
        return redirect()->route('dashboard');
    });
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', [AuthController::class, 'index'])->name('login');
        Route::post('login', [AuthController::class, 'login']);
    });
    Route::group(['middleware' => 'auth'], function () {
        Route::get('profile', [AuthController::class, 'profile'])->name('dashboard.profile');
        Route::post('profile', [AuthController::class, 'postProfile']);
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('summary', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::group(['prefix' => 'slider'], function () {
            Route::get('', [SliderController::class, 'index'])->name('dashboard.slider');
            Route::get('add', [SliderController::class, 'add'])->name('dashboard.slider.add');
            Route::get('{id}', [SliderController::class, 'edit'])->name('dashboard.slider.edit');
            Route::post('', [SliderController::class, 'create']);
            Route::post('{id}', [SliderController::class, 'update']);
            Route::delete('{id}', [SliderController::class, 'delete']);
        });
        Route::group(['prefix' => 'artikel/{type}'], function () {
            Route::get('', [ArticleController::class, 'index'])->name('dashboard.artikel');
            Route::get('add', [ArticleController::class, 'add'])->name('dashboard.artikel.add');
            Route::get('{id}', [ArticleController::class, 'edit'])->name('dashboard.artikel.edit');
            Route::post('', [ArticleController::class, 'create']);
            Route::post('{id}', [ArticleController::class, 'update']);
            Route::delete('{id}', [ArticleController::class, 'delete']);
        });
        Route::group(['prefix' => 'gallery/{type}'], function () {
            Route::get('', [GalleryController::class, 'index'])->name('dashboard.gallery');
            Route::get('add', [GalleryController::class, 'add'])->name('dashboard.gallery.add');
            Route::get('{id}', [GalleryController::class, 'edit'])->name('dashboard.gallery.edit');
            Route::post('', [GalleryController::class, 'create']);
            Route::post('{id}', [GalleryController::class, 'update']);
            Route::delete('{id}', [GalleryController::class, 'delete']);
        });
        Route::group(['prefix' => 'sdm'], function () {
            Route::get('', [HumanResourcesController::class, 'index'])->name('dashboard.sdm');
            Route::get('add', [HumanResourcesController::class, 'add'])->name('dashboard.sdm.add');
            Route::get('{id}', [HumanResourcesController::class, 'edit'])->name('dashboard.sdm.edit');
            Route::post('', [HumanResourcesController::class, 'create']);
            Route::post('{id}', [HumanResourcesController::class, 'update']);
            Route::delete('{id}', [HumanResourcesController::class, 'delete']);
        });
        Route::group(['prefix' => 'bagian'], function () {
            Route::get('', [DepartmentController::class, 'index'])->name('dashboard.bagian');
            Route::get('add', [DepartmentController::class, 'add'])->name('dashboard.bagian.add');
            Route::get('{id}', [DepartmentController::class, 'edit'])->name('dashboard.bagian.edit');
            Route::post('', [DepartmentController::class, 'create']);
            Route::post('{id}', [DepartmentController::class, 'update']);
            Route::delete('{id}', [DepartmentController::class, 'delete']);
        });
        Route::group(['prefix' => 'user'], function () {
            Route::get('', [UserController::class, 'index'])->name('dashboard.user');
            Route::get('add', [UserController::class, 'add'])->name('dashboard.user.add');
            Route::get('{id}', [UserController::class, 'edit'])->name('dashboard.user.edit');
            Route::post('', [UserController::class, 'create']);
            Route::put('{id}', [UserController::class, 'update']);
            Route::delete('{id}', [UserController::class, 'delete']);
        });
        Route::group(['prefix' => 'konten/{type}'], function () {
            Route::get('', [ContentController::class, 'edit'])->name('dashboard.konten.edit');
            Route::put('', [ContentController::class, 'update']);
        });
        Route::group(['prefix' => 'page/{type}/{name}'], function () {
            Route::get('', [PageController::class, 'edit'])->name('dashboard.page.edit');
            Route::put('', [PageController::class, 'update']);
            Route::group(['prefix' => 'attachment'], function () {
                Route::get('add', [PageController::class, 'addAttachment'])->name('dashboard.page.attachment.add');
                Route::get('{id}', [PageController::class, 'editAttachment'])->name('dashboard.page.attachment.edit');
                Route::post('add', [PageController::class, 'createAttachment']);
                Route::post('{id}', [PageController::class, 'updateAttachment']);
                Route::delete('{id}', [PageController::class, 'deleteAttachment']);
            });
            Route::group(['prefix' => 'training'], function () {
                Route::get('add', [PageController::class, 'addTraining'])->name('dashboard.page.training.add');
                Route::get('{id}', [PageController::class, 'editTraining'])->name('dashboard.page.training.edit');
                Route::post('add', [PageController::class, 'createTraining']);
                Route::post('{id}', [PageController::class, 'updateTraining']);
                Route::delete('{id}', [PageController::class, 'deleteTraining']);
            });
            Route::group(['prefix' => 'officer'], function () {
                Route::get('add', [PageController::class, 'addOfficer'])->name('dashboard.page.officer.add');
                Route::get('{id}', [PageController::class, 'editOfficer'])->name('dashboard.page.officer.edit');
                Route::post('add', [PageController::class, 'createOfficer']);
                Route::post('{id}', [PageController::class, 'updateOfficer']);
                Route::delete('{id}', [PageController::class, 'deleteOfficer']);
            });
        });

    });
});
Route::group(['prefix' => 'ajax'], function () {
    Route::get('covid', [DashboardController::class, 'getDataCovid'])->name('ajax.covid');
});

