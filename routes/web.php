<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailJenisPengujianController;
use App\Http\Controllers\DetailPermohonanController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\JenisPengujianController;
use App\Http\Controllers\LhuController;
use App\Http\Controllers\LhusController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StpController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
})->name('login');

Route::prefix('/auth')->name('auth.')->group(function () {
    Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'store'])->name('storeRegister');

});

Route::middleware(['admin'])->group(function () {
    Route::name('admin.')->prefix('admin')->group(function () {

        Route::get('/index', [DashboardController::class, 'index'])->name('index');
        Route::resource('user', UserController::class);
        Route::resource('jenis', JenisController::class);
        Route::resource('jenis-pengujian', JenisPengujianController::class);
        Route::name('jenis-pengujian.')->prefix('jenisPengujian')->group(function () {
            Route::get('/cetak', [JenisPengujianController::class, 'cetak'])->name('cetak');
        });
        // Route::resource('detail-jenis-pengujian', DetailJenisPengujianController::class)->except(['index']);
        Route::name('jenis-pengujian-detail.')->prefix('jenis-pengujian-detail')->group(function () {
            Route::get('/index/{id}', [DetailJenisPengujianController::class, 'index'])->name('index');
            Route::get('/create/{id}', [DetailJenisPengujianController::class, 'create'])->name('create');
            Route::post('/store/', [DetailJenisPengujianController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [DetailJenisPengujianController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [DetailJenisPengujianController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [DetailJenisPengujianController::class, 'destroy'])->name('destroy');
        });

        Route::resource('permohonan', PermohonanController::class);
        Route::name('stp.')->prefix('stp')->group(function () {
            Route::get('/index/{id}', [StpController::class, 'index'])->name('index');
            Route::get('/create/{id}', [StpController::class, 'create'])->name('create');
            Route::post('/store/', [StpController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [StpController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [StpController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [StpController::class, 'destroy'])->name('destroy');
        });
        Route::name('lhus.')->prefix('lhus')->group(function () {
            Route::get('/index/{id}', [LhusController::class, 'index'])->name('index');
            Route::get('/create/{id}', [LhusController::class, 'create'])->name('create');
            Route::post('/store/', [LhusController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [LhusController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [LhusController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [LhusController::class, 'destroy'])->name('destroy');
        });
        Route::name('lhu.')->prefix('lhu')->group(function () {
            Route::get('/index/{id}', [LhuController::class, 'index'])->name('index');
            Route::get('/create/{id}', [LhuController::class, 'create'])->name('create');
            Route::post('/store/', [LhuController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [LhuController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [LhuController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [LhuController::class, 'destroy'])->name('destroy');
        });

        // report
        Route::name('report.')->prefix('laporan')->group(function () {
            Route::get('stp/{id}', [ReportController::class, 'stp'])->name('stp');
            Route::get('lhus/{id}', [ReportController::class, 'lhus'])->name('lhus');
            Route::get('lhu/{id}', [ReportController::class, 'lhu'])->name('lhu');
            Route::get('fpps/{id}', [ReportController::class, 'fpps'])->name('fpps');
            Route::get('fpps-detail/{id}', [ReportController::class, 'fppsDetail'])->name('fppsDetail');
            Route::get('permohonan/', [ReportController::class, 'permohonanAll'])->name('permohonanAll');
            Route::post('jenis-pengujian/', [ReportController::class, 'jenisPengujian'])->name('jenisPengujian');
            Route::get('pemohon/', [ReportController::class, 'pemohon'])->name('pemohon');
            // Route::get('/cetak/kegiatan', [ReportController::class, 'kegiatanAll'])->name('kegiatanAll');
            // Route::post('/cetak/kegiatan-tahun', [ReportController::class, 'kegiatanYear'])->name('kegiatanYear');
            // Route::post('/cetak/kegiatan-bulan', [ReportController::class, 'kegiatanMonth'])->name('kegiatanMonth');

            // Route::get('konflik', [ReportController::class, 'konflikIndex'])->name('konflikIndex');
            // Route::get('/cetak/konflik', [ReportController::class, 'konflikAll'])->name('konflikAll');
            // Route::post('/cetak/konflik-tahun', [ReportController::class, 'konflikYear'])->name('konflikYear');
            // Route::post('/cetak/konflik-bulan', [ReportController::class, 'konflikMonth'])->name('konflikMonth');

            // Route::get('gangguan', [ReportController::class, 'gangguanIndex'])->name('gangguanIndex');
            // Route::get('/cetak/gangguan', [ReportController::class, 'gangguanAll'])->name('gangguanAll');
            // Route::post('/cetak/gangguan-tahun', [ReportController::class, 'gangguanYear'])->name('gangguanYear');
            // Route::post('/cetak/gangguan-bulan', [ReportController::class, 'gangguanMonth'])->name('gangguanMonth');

            // Route::get('kriminal', [ReportController::class, 'kriminalIndex'])->name('kriminalIndex');
            // Route::get('/cetak/kriminal', [ReportController::class, 'kriminalAll'])->name('kriminalAll');
            // Route::post('/cetak/kriminal-tahun', [ReportController::class, 'kriminalYear'])->name('kriminalYear');
            // Route::post('/cetak/kriminal-bulan', [ReportController::class, 'kriminalMonth'])->name('kriminalMonth');

            // Route::get('/cetak/grafik-kejadian', [ReportController::class, 'grafik'])->name('grafik');
            // Route::get('/cetak/petugas', [ReportController::class, 'petugas'])->name('petugas');
            // Route::get('/cetak/kasi', [ReportController::class, 'kasi'])->name('kasi');
            // Route::get('/cetak/camat', [ReportController::class, 'camat'])->name('camat');
            // Route::get('/cetak/jadwal-petugas', [ReportController::class, 'jadwal'])->name('jadwal');
            // Route::get('surat-petugas', [ReportController::class, 'suratIndex'])->name('suratIndex');
            // Route::post('/cetak/surat-petugas/', [ReportController::class, 'surat'])->name('surat');
            // Route::get('/cetak/pegawai', [ReportController::class, 'pegawai'])->name('pegawai');
            // Route::get('/cetak/BA-kegiatan/{id}', [ReportController::class, 'baKegiatan'])->name('baKegiatan');
            // Route::get('/cetak/BA-gangguan/{id}', [ReportController::class, 'baGangguan'])->name('baGangguan');
            // Route::get('/cetak/BA-konflik/{id}', [ReportController::class, 'baKonflik'])->name('baKonflik');
            // Route::get('/cetak/BA-kriminal/{id}', [ReportController::class, 'baKriminal'])->name('baKriminal');
        });

    });
});

Route::middleware(['pemohon'])->group(function () {
    Route::name('pemohon.')->prefix('pemohon')->group(function () {
        Route::get('/index', [DashboardController::class, 'pemohonIndex'])->name('index');
        Route::resource('permohonan', PermohonanController::class);
        Route::name('permohonan-detail.')->prefix('permohonan-detail')->group(function () {
            Route::get('/index/{id}', [DetailPermohonanController::class, 'index'])->name('index');
            Route::get('/create/{id}', [DetailPermohonanController::class, 'create'])->name('create');
            Route::post('/store/', [DetailPermohonanController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [DetailPermohonanController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [DetailPermohonanController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [DetailPermohonanController::class, 'destroy'])->name('destroy');
        });

    });
});

Route::middleware(['penyelia'])->group(function () {
    Route::name('penyelia.')->prefix('penyelia')->group(function () {
        Route::get('/index', [DashboardController::class, 'penyeliaIndex'])->name('index');
        Route::resource('permohonan', PermohonanController::class);

    });
});
