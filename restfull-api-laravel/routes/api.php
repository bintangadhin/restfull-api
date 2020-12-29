<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// tambahkan kode dibawah
Route::get('barang','apicontroller@get_all_barang');

//post data barang
Route::post('barang/tambah_barang','apicontroller@insert_data_barang');

// put data barang
Route::put('/barang/update/{kode_barang}','apicontroller@update_data_barang');

// delete data barang
Route::delete('/barang/delete/{kode_barang}','apicontroller@delete_data_barang');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
