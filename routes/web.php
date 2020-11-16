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

Route::get('/', "SiteController@index");

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => "works"], function () {
    Route::get("/", "WorkController@index")->name("works");
    Route::get("create", "WorkController@create")->name("createWork");
    Route::post('save', "WorkController@store")->name("workSave");
    Route::get("edit/{id}", "WorkController@edit")->name("workEdit");
    Route::put("update/{id}", "WorkController@update")->name("updateWork");
    Route::delete("delete/{id}", "WorkController@delete")->name("deleteWorks");
});

Route::group(['prefix' => "sections"], function () {
    Route::get("/", "SectionController@index")->name("sections");
    Route::get("create", "SectionController@create")->name("createSection");
    Route::post("save", "SectionController@store")->name("sectionSave");
    Route::get("edit/{id}", "SectionController@edit")->name("sectionEdit");
    Route::put("update/{id}", "SectionController@update")->name("updateSection");
    Route::delete("delete/{id}", "SectionController@delete")->name("deleteSections");
});

Route::group(['prefix' => "datafilters"], function () {
    Route::get("/", "DataFilterController@index")->name("datafilters");
    Route::get("create", "DataFilterController@create")->name("createDatafilter");
    Route::post("save", "DataFilterController@store")->name("datafilterSave");
    Route::get("edit/{id}", "DataFilterController@edit")->name("datafilterEdit");
    Route::put("update/{id}", "DataFilterController@update")->name("updateDatafilter");
    Route::delete("delete/{id}", "DataFilterController@delete")->name("deleteDatafilter");
});

Route::group(['prefix' => "Gallerys"], function () {
    Route::get("/", "GalleryController@index")->name("gallerys");
    Route::get("create", "GalleryController@create")->name("createGallery");
    Route::post("save", "GalleryController@store")->name("gallerySave");
    Route::get("edit/{id}", "GalleryController@edit")->name("galleryEdit");
    Route::put("update/{id}", "GalleryController@update")->name("updateGallery");
    Route::delete("delete/{id}", "GalleryController@delete")->name("deleteGallery");
});

Auth::routes();
