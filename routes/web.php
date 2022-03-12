<?php

use App\Http\Controllers\MedicineController;
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
    return view('mystore');
});

Route::get('wfp/{kelas?}', function ($kelas = "") {
    if($kelas == ""){
        return "Tidak ada kelas";
    }elseif($kelas != "C" || $kelas != "c"){
        return "Bukan kelas saya";
    }else{
        return "WFP kelas " . $kelas;
    }
});

Route::view('/welcome', 'welcome');

Route::get('Azriel', function () {
    return "Hello WFP C";
});

Route::get('greeting', function () {
    return view('welcome', ['name' => 'Azriel']);
});

Route::resource('obat', 'MedicineController');
Route::resource('kategori_obat', 'CategoryController');
