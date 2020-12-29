<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarangModel; // tambahkan kode ini
class apicontroller extends Controller
{
       //fungsi ambil data di database
       public function get_all_barang() {
    	return response()->json(BarangModel::all(), 200);
    }

    //fungsi post untuk tambah data
    public function insert_data_barang(Request $request) {
    	$insert_barang = new BarangModel;
    	$insert_barang->nama_barang = $request->namaBarang;
    	$insert_barang->jumlah_barang = $request->jmlBarang;
    	$insert_barang->save();
    	return response([
    		'status' => 'OK',
    		'massage' => 'Barang berhasil ditambahkan',
			'data' => $insert_barang
		], 200);
	}
	//fungsi put untuk update 
	public function update_data_barang(Request $request, $id) {
    	$check_barang = BarangModel::firstWhere('kode_barang', $id);
    	if ($check_barang) {
    		$data_barang = BarangModel::find($id);
    		$data_barang->nama_barang = $request->namaBarang;
    		$data_barang->jumlah_barang = $request->jmlBarang;
    		$data_barang->save();

    		return response([
    			'status' => 'OK',
    			'message' => 'Data berhasil diubah',
    			'update-data' => $data_barang], 200);
    	} else {
    		return response([
    			'status' => 'Data not found',
    			'message' => 'Kode barang  tidak ditemukan'], 404);
    	}
	}
	
	//fungsi delete 
    public function delete_data_barang($id) {
    	$check_barang = BarangModel::firstWhere('kode_barang', $id);
    	if ($check_barang) {
    		BarangModel::destroy($id);
    		return response([
    			'status' => 'OK',
    			'message' => 'Data berhasil dihapus'], 200);
    	} else {
    		return response([
    			'status' => 'Data not found',
    			'message' => 'Kode tidak ditemukan'], 404);
    	}
    }
}
