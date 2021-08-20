<?php

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
    return view('home');
});

Route::group(['prefix' => 'lembaga'], function(){
    Route::get('tentang',function(){
        return view('lembaga.tentang');
    });
    Route::get('struktur',function(){
        return view('lembaga.struktur');
    });
    Route::get('sdm',function(){
        return view('lembaga.sdm');
    });
});


Route::group(['prefix' => 'artikel'], function(){
    Route::get('pelatihan',function(){
        return view('artikel.pelatihan');
    });
    Route::get('pertanian',function(){
        return view('artikel.pertanian');
    });
    Route::get('umum',function(){
        return view('artikel.umum');
    });
});

Route::group(['prefix' => 'layanan'], function(){
    Route::get('pelatihan',function(){
        return view('artikel.pelatihan');
    });
    Route::get('pertanian',function(){
        return view('artikel.pertanian');
    });
    Route::get('umum',function(){
        return view('artikel.umum');
    });
});


Route::group(['prefix' => 'satker'], function(){
    Route::get('spi',function(){
        return view('satker.spi');
    });
    Route::get('wbk',function(){
        return view('satker.wbk');
    });
    Route::get('ppid',function(){
        return view('satker.ppid');
    });
    Route::get('pengadaan',function(){
        return view('satker.pengadaan');
    });
    Route::get('perpustakaan',function(){
        return view('satker.perpustakaan');
    });
    Route::get('iso',function(){
        return view('satker.iso');
    });
});

Route::group(['prefix' => 'galeri'], function(){
    Route::get('photo',function(){
        return view('galeri.photo');
    });
    Route::get('video',function(){
        return view('galeri.video');
    });
});