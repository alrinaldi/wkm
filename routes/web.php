<?php

use App\Http\Controllers\AdminJuri;
use App\Http\Controllers\AdminManageStream;
use App\Http\Controllers\MakalahControllerUser;
use App\Http\Controllers\PeriodeEvent;
use App\Http\Livewire\AdminAddStreamEvent;
use App\Http\Livewire\AdminManageJuri;
use App\Http\Livewire\AdminManagePeserta;
use App\Http\Livewire\AdminViewPeriodeEvent;
use App\Http\Livewire\AdminViewStream;
use App\Http\Livewire\DaftarPeserta;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRole;
use App\Http\Livewire\DashboardUsr;
use App\HttP\Livewire\RegitserMakalah;
use App\Http\Livewire\DetailRegisterMakalah;
use App\Http\Livewire\StreamJuri;
use App\Http\Livewire\ListPesertaStreamJuri;
use App\Http\Controllers\AdminPeserta;
use App\Http\Livewire\AdminSettlePeserta;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('dashboard',DashboardUsr::class)->name('dashboard');
    Route::get('registermakalah',RegitserMakalah::class)->name('registermakalah');
    Route::get('detailregistermakalah/{id}',DetailRegisterMakalah::class)->name('detailregistermakalah');
    Route::get('daftarpeserta',DaftarPeserta::class)->name('daftarpeserta');


    Route::get('adminviewstream',AdminViewStream::class)->name('adminviewstream');
    route::get('adminaddstreamevent/{ide}',AdminAddStreamEvent::class)->name('adminaddstreamevent');
    Route::post('/addstreamevent',[AdminManageStream::class,'addstreamevent']);
    Route::get('adminviewperiodeevent',AdminViewPeriodeEvent::class)->name('adminviewperiodeevent');
    Route::post('/addperiodeevent',[PeriodeEvent::class,'addperiodeevent']);



    Route::get('adminmanagepeserta',AdminManagePeserta::class)->name('adminmanagepeserta');
    Route::post('/addpeserta',[AdminPeserta::class,'addpeserta']);


    Route::get('adminmanagejuri',AdminManageJuri::class)->name('adminmanagejuri');
    Route::post('/addjuri',[AdminJuri::class,'addjuri']);
    Route::post('detailmakalahuser',[MakalahControllerUser::class,'detailmakalahuser']);


    Route::get('streamjuri',StreamJuri::class)->name('streamjuri');
    Route::post('/detailmakalahuserjuri',[MakalahControllerUser::class,'detailmakalahuserjuri']);
    Route::get('/listpesertastreamjuri/{ide}',ListPesertaStreamJuri::class)->name('listpesertastreamjuri');

    Route::get('adminsettlepeserta/{ide}',AdminSettlePeserta::class)->name('adminsettlepeserta');

    // Route::group(['middleware'=>'role:user','prefix' => 'user', 'as' => 'user.'],function(){
    //     Route::get('user.registermakalah',RegitserMakalah::class)->name('user.registermakalah');
    //     Route::get('detailregistermakalah/{id}',DetailRegisterMakalah::class)->name('detailregistermakalah');
    // });

    // Route::group(['middleware'=>'role:admin','prefix' => 'admin', 'as' => 'admin.'],function(){

    //     Route::get('registermakalah',RegitserMakalah::class)->name('admin.registermakalah');
    //     Route::get('detailregistermakalah/{id}',DetailRegisterMakalah::class)->name('detailregistermakalah');
    // });


    // Route::group(['middleware'=>'role:juri','prefix' => 'user', 'as' => 'juri.'],function(){

    //     Route::get('registermakalah',RegitserMakalah::class)->name('juri.registermakalah');
    //     Route::get('detailregistermakalah/{id}',DetailRegisterMakalah::class)->name('detailregistermakalah');
    // });


});
