<?php

use Illuminate\Support\Facades\Route;
use App\Models\KunjunganModel;
use Illuminate\Http\Request;
use App\Models\DokterModel;
use App\Models\PasienModel;

Route::get('/', function () {
    return view('freeuser');
});

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/admin/pasien', function () {
    $data=PasienModel::all();
    return view('admin/pasien',["data"=>$data]);
    return view('admin/pasien');
});

Route::get('/admin/dokter', function () {
    $data=DokterModel::all();
    return view('admin/dokter',["data"=>$data]);
});

Route::get('/admin/kunjungan', function () {
    $data=KunjunganModel::all();
    return view('admin/kunjungan',["data"=>$data]);
});

Route::get('/admin/jadwal', function () {
    $data=KunjunganModel::all();
    return view('admin/jadwal',["data"=>$data]);
});

Route::post('/admin/tambahkunjungan', function (Request $request ) {
    $data=[
        "nim"=>$request->input("nim"),
        "nama"=>$request->input("nama"),
        "tanggal"=>$request->input("tanggal"),
        "jurusan"=>$request->input("jurusan"),
        "no_hp"=>$request->input("no_hp"),
        "keluhan"=>$request->input("keluhan"),
    ];
    $data=KunjunganModel::insert($data);
    return redirect()->to("/admin/kunjungan");
});

Route::post('/admin/hapuskunjungan', function (Request $request ) {
    
    $data=KunjunganModel::find($request->id_kunjungan);
    $data->delete();
    return redirect()->to("/admin/kunjungan");
});

Route::post('/admin/hapusdokter', function (Request $request ) {
    
    $data=DokterModel::find($request->id_dokter);
    $data->delete();
    return redirect()->to("/admin/dokter");
});

Route::post('/admin/tambahdokter', function (Request $request ) {
    $data=[
        "username"=>$request->input("username"),
        "nama_dokter"=>$request->input("nama_dokter"),
        "no_hp"=>$request->input("no_hp"),
        "password"=>$request->input("password"),
    ];
    $data=DokterModel::insert($data);
    return redirect()->to("/admin/dokter");
});