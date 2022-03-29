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

// Route::get('/', function () {
//     return view('layout.app');
// });
Route::get('/clear-cache', function() {
  $exitCode = Artisan::call('config:clear');
  $exitCode = Artisan::call('cache:clear');
  $exitCode = Artisan::call('config:cache');
  return 'Berhasil menghapus cache'; //Return anything
});
 Route::get('ruko', function () {
     return view('front.inginkorea');
 });

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['role:Super Admin']], function () {
        Route::group(['middleware' => ['role:Super Admin'],'prefix' => 'admin'], function(){
            Route::resource('user', 'UserController')->except('destroy');
            Route::resource('banner', 'admin\BannerController')->except('destroy');
            Route::resource('product', 'admin\ProductController')->except('destroy');
            Route::resource('mitra', 'admin\MitraController')->except('destroy');
            Route::resource('event', 'admin\EventController')->except('destroy');
            Route::resource('video', 'admin\VideoController')->except('destroy');
            Route::resource('testimoni', 'admin\TestimoniController')->except('destroy');
            Route::resource('partner', 'admin\PartnerController')->except('destroy');
            Route::resource('promotion', 'admin\PromotionController')->except('destroy');
            Route::resource('tutor', 'admin\TutorController')->except('destroy');
            Route::get('banner/{id}/visible', 'admin\BannerController@visible')->name('banner.visible');
            
            Route::resource('universitas', 'admin\UniversitasController')->except('destroy');
            Route::post('b-indonesia/', 'admin\UniversitasController@storeBIndonesia')->name('b-indonesia.store');
            Route::post('b-indonesia/{id}', 'admin\UniversitasController@updateBIndonesia')->name('b-indonesia.update');
            Route::post('kursus-topik/', 'admin\UniversitasController@storeKursusTopik')->name('kursus-topik.store');
            Route::post('kursus-topik/{id}', 'admin\UniversitasController@updateKursusTopik')->name('kursus-topik.update');
            Route::post('b-korea/', 'admin\UniversitasController@storeBKorea')->name('b-korea.store');
            Route::post('b-korea/{id}', 'admin\UniversitasController@updateBKorea')->name('b-korea.update');
            Route::post('uji-kemampuan/', 'admin\UniversitasController@storeUjiKemampuan')->name('uji-kemampuan.store');
            Route::post('uji-kemampuan/{id}', 'admin\UniversitasController@updateUjiKemampuan')->name('uji-kemampuan.update');
        });
        
    });
    Route::get('my-profile', 'UserController@myProfile')->name('profile.index');
    Route::put('my-profile', 'UserController@updateProfile')->name('profile.update-profil');
    Route::put('my-profile/password', 'UserController@updatePassword')->name('profile.update-password');

    Route::group(['middleware' => ['role:Super Admin'],'prefix' => 'table'], function () {
        Route::group(['middleware' => ['role:Super Admin']], function(){
            Route::get('data-user', 'UserController@getData');
             Route::get('/data-banner', 'admin\BannerController@getData');
             Route::get('/data-universitas', 'admin\UniversitasController@getData');
             Route::get('/data-b-indonesia', 'admin\UniversitasController@getDataBIndonesia');
             Route::get('/data-kursus-topik', 'admin\UniversitasController@getDataKursusTopik');
             Route::get('/data-product', 'admin\ProductController@getData');
             Route::get('/data-b-korea', 'admin\UniversitasController@getDataBKorea');
             Route::get('/data-uji-kemampuan', 'admin\UniversitasController@getDataUjiKemampuan');
             Route::get('/data-mitra', 'admin\MitraController@getData');
             Route::get('/data-event', 'admin\EventController@getData');
             Route::get('/data-video', 'admin\VideoController@getData');
             Route::get('/data-testimoni', 'admin\TestimoniController@getData');
             Route::get('/data-partner', 'admin\PartnerController@getData');
             Route::get('/data-promotion', 'admin\PromotionController@getData');
             Route::get('/data-tutor', 'admin\TutorController@getData');
        });
    });
            
    Route::group(['middleware' => ['role:Super Admin'],'prefix' => 'delete'], function () {
        Route::group(['middleware' => ['role:Super Admin']], function(){
            Route::get('data-user/{id}', 'UserController@destroy')->name('user.destroy');
            Route::get('banner/{id}', 'admin\BannerController@destroy')->name('banner.destroy');
            Route::get('universitas/{id}', 'admin\UniversitasController@destroy')->name('universitas.destroy');
            Route::get('product/{id}', 'admin\ProductController@destroy')->name('product.destroy');
            Route::get('mitra/{id}', 'admin\MitraController@destroy')->name('mitra.destroy');
            Route::get('event/{id}', 'admin\EventController@destroy')->name('event.destroy');
            Route::get('video/{id}', 'admin\VideoController@destroy')->name('video.destroy');
            Route::get('testimoni/{id}', 'admin\TestimoniController@destroy')->name('testimoni.destroy');
            Route::get('partner/{id}', 'admin\PartnerController@destroy')->name('partner.destroy');
            Route::get('promotion/{id}', 'admin\PromotionController@destroy')->name('promotion.destroy');
            Route::get('tutor/{id}', 'admin\TutorController@destroy')->name('tutor.destroy');
        });
    });
});
// Route::get('/', function(){
//     if (Auth::user()->hasAnyRole(['Super Admin'])) {
//         return redirect()->route('home');
//     } else {
//         Auth::logout();
//         return redirect()->route('login');
//     }
// });

Route::get('/', function () {
    return view('front.index');
})->name('home');
Route::prefix('kelas')->group(function () {
Route::get('uji-kemampuan',function(){
    return view('front.uji-kemampuan');
})->name('front.uji-kemampuan');
Route::get('kursus-bahasa-korea',function(){
    return view('front.kursus-bahasa-korea');
})->name('front.kursus-bahasa-korea');
Route::get('kursus-topik',function(){
    return view('front.kursus-topik');
})->name('front.kursus-topik');
Route::get('kursus-bahasa-indo',function(){
    return view('front.kursusBi');
})->name('front.kursusBi');
Route::get('talent-scouting',function(){
    return view('front.talent-scouting');
})->name('kelas.talent-scouting');
});
Route::get('detail-kelas-korea',function(){
    return view('front.detail-product');
})->name('front.detail-kelas-korea');
Route::get('tentang-ruko',function(){
    return view('front.tentang-kami');
})->name('front.tentangkami');
Route::prefix('layanan')->group(function () {
    Route::get('/konsutasi', function () {  
        return view('front.konsultasi'); 
    })->name('layanan.konsultasi');
    Route::get('/translator', function () {  
        return view('front.translator'); 
    })->name('layanan.translator');
    Route::get('/interpreter', function () {  
        return view('front.interpreter'); 
    })->name('layanan.interpreter');
    Route::get('/ingin-korea',function(){
    return view('front.inginKorea');
})->name('layanan.inginKorea');

});

Route::get('detail-kelas-indonesia/a1',function(){
    return view('front.detailbindo.a1');
})->name('front.detail-kelas-indonesia.a1');
Route::get('detail-kelas-indonesia/a2',function(){
    return view('front.detailbindo.a2');
})->name('front.detail-kelas-indonesia.a2');
Route::get('detail-kelas-indonesia/b1',function(){
    return view('front.detailbindo.b1');
})->name('front.detail-kelas-indonesia.b1');
Route::get('detail-kelas-indonesia/b2',function(){
    return view('front.detailbindo.b2');
})->name('front.detail-kelas-indonesia.b2');

Route::get('detail-kelas-korea/level-dasar',function(){
    return view('front.detailkorea.level-dasar');
})->name('front.detail-kelas-korea.dasar');
Route::get('detail-kelas-korea/level-1',function(){
    return view('front.detailkorea.level-1');
})->name('front.detail-kelas-korea.1');
Route::get('detail-kelas-korea/level-2',function(){
    return view('front.detailkorea.level-2');
})->name('front.detail-kelas-korea.2');
Route::get('detail-kelas-korea/level-3',function(){
    return view('front.detailkorea.level-3');
})->name('front.detail-kelas-korea.3');
Route::get('detail-kelas-korea/level-4',function(){
    return view('front.detailkorea.level-4');
})->name('front.detail-kelas-korea.4');
Route::get('detail-kelas-korea/level-5',function(){
    return view('front.detailkorea.level-5');
})->name('front.detail-kelas-korea.5');
Route::get('detail-kelas-korea/level-6',function(){
    return view('front.detailkorea.level-6');
})->name('front.detail-kelas-korea.6');






Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/send-email', 'SendMailController@sendEmail')->name('send.email');
