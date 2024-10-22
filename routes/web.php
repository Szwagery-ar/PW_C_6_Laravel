<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('IndexAdmin');
});


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/listofmedicines', function () {
    return view('admin.listofmedicines');
});
Route::get('/admin/medicinegroups', function () {
    return view('admin.medicinegroups');
});
Route::get('/admin/usermanagement', function () {
    return view('admin.usermanagement');
});


Route::get('/admin/detail', function () {
    return view('admin.detail');
});
Route::get('/admin/detailgroup', function () {
    return view('admin.detailgroup');
});
Route::get('/admin/editmedicine', function () {
    return view('admin.editmedicine');
});
Route::get('/admin/addmedicine', function () {
    return view('admin.addmedicine');
});
Route::get('/admin/editprofile', function () {
    return view('admin.editprofile');
});