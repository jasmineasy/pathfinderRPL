<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\kursusController;
use App\Http\Controllers\magangController;
use App\Http\Controllers\SessionController;

//*Contoh == Route::get('/edit', [TimController::class, 'edit']);
//* Route::post('/tim/tambah-member', [TimController::class, 'tambahMember'])->name('tambahMember');
//* Route::post('/tim/simpan-tim/{idPengguna}/{namePengguna}', [TimController::class, 'simpanTim'])->name('simpan-tim');

Route::get('/', [SessionController::class, 'index']); //* LANDING PAGE

// login 
Route::get('/', [SessionController::class, 'index']); //* LANDING PAGE
Route::post('/sesi/login', [SessionController::class, 'login']); //*pencet button login
Route::get('/sesi/register', [SessionController::class, 'register']); //*pencet button login
Route::post('/sesi/create', [SessionController::class, 'create']); //*pencet button REGISTER
Route::get('/sesi/logout', [SessionController::class, 'logout']); //*pencet button logout

// ! ==============MAHASISWA===============
// ! CAREERPATH MAHASISWA
// /careerPath/$namePengguna
Route::get('/careerPath', [MahasiswaController::class, 'showCareerPath']);
Route::get('/careerPath', [MahasiswaController::class, 'showCareerPath']);
Route::get('/careerPath/{namePengguna}', [MahasiswaController::class, 'showCareerPath']);


Route::get('/CareerPath/kontenMHS/{namaKarir}/{idKarir}', [MahasiswaController::class, 'kontenMHSCareerPath'])->name('kontenKarirMHS');

// ! INTERNSHIP FINDER
Route::get('/internshipfinder', [MahasiswaController::class, 'showInternshipFinder']);
Route::get('/internshipfinder/{namePengguna}', [MahasiswaController::class, 'showInternshipFinder']);

Route::get('/datascience',[MahasiswaController::class, 'showDataScienceIntern']);
Route::get('/interactivemedia',[MahasiswaController::class, 'showInteractiveMediaIntern']);
Route::get('/interndetail',[MahasiswaController::class, 'showInternshipDetail']);
Route::get('/coursedetail',[MahasiswaController::class, 'showCourseDetail']);


// ! COURSE FINDER
Route::get('/coursefinder', [MahasiswaController::class, 'showCourseFinder']);
Route::get('/coursefinder/{namePengguna}', [MahasiswaController::class, 'showCourseFinder']);
Route::get('/datasciencecourse',[MahasiswaController::class, 'showDataScienceCourse']);
Route::get('/interactivemediacourse',[MahasiswaController::class, 'showInteractiveMediaCourse']);

// ! ==============ADMIN===============
// ! INTERNSHIP FINDER ADMIN
Route::resource('magang', magangController::class);
Route::get('/internshipFinderAdmin', [magangController::class, 'index']); 

// ! COURSE FINDER ADMIN
Route::get('/courseFinderAdmin', [kursusController::class, 'index']); 
Route::get('/createCourseFinder', [AdminController::class, 'createCourseFinder']);
Route::resource('kursus', kursusController::class);

// ! CAREERPATH ADMIN
Route::get('/careerPathAdmin', [AdminController::class, 'showCareerPath']); //* DEFAULT
Route::get('/CareerPath/CreateForm', [AdminController::class, 'createCareerPath']); //form createnya saja

// *CRUD karir
// konten karir
Route::get('/CareerPath/konten/{namaKarir}/{idKarir}', [AdminController::class, 'kontenKarir'])->name('kontenKarir');

// CREATE
Route::get('/CareerPath/Create', [AdminController::class, 'createKarir'])->name('tambahKarir');

// EDIT
Route::get('/CareerPath/edit/{idKarir}', [AdminController::class, 'editKarir'])->name('editKarir');

// DELETE
Route::get('/CareerPath/delete/{idKarir}', [AdminController::class, 'deleteKarir'])->name('deleteKarir');

// UPDATE
Route::get('/CareerPath/update/{idKarir}', [AdminController::class, 'updateCareer'])->name('updateCareer');