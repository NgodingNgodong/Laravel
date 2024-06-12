<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/create', [SiswaController::class, 'create']);
Route::post('/siswa', [SiswaController::class, 'store']);
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);
Route::patch('/siswa/{id}', [SiswaController::class, 'update']);
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy']);
Route::get('/kelas', [KelasController::class, 'kelas']);
Route::get('/kelas/create', [KelasController::class, 'create']);
Route::post('/kelas', [KelasController::class, 'store']);
Route::get('/kelas/edit/{id}', [KelasController::class, 'edit']);
Route::patch('/kelas/{id}', [KelasController::class, 'update']);
Route::delete('/kelas/{id}', [KelasController::class, 'destroy']);



Route::get('/belajar2', [SiswaController::class, 'siswa2']);
Route::get('/belajar3',   [SiswaController::class, 'siswa3']);
Route::get('/belajar4', [SiswaController::class, 'siswa4']);


Route::get('/Home', function() {
    echo 'Selamat datang di dunia!';
});

Route::get('/HAAI', function() {    
    echo 'I LOVE THE PANBERS!!';
});

Route::get('/Cominfo', function() {
    echo '404: SITUS TERBLOKIR!';
});


// Route::get('/belajar', function() {
//     $data['nama'] = "Joji Budiman";
//     $data['jk'] = "Non Binari";
//     return view('belajar', $data);
// });

Route::get('/bahasa', function() {
    $data['bahasa'] = "PHP";
    $data['penemu'] = "Rasmus Lerdorf";
    return view('bahasa', $data);
});

Route::get('/books', function() {
    $data['judul'] = "Harimau! Harimau";
    $data['penulis'] = "Mochtar Lubis";
    return view('books', $data);
});
