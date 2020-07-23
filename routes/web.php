<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'AnasayfaController@index')->name('anasayfa');
Route::get('/kategori/{slug_kategoriadi}', 'KategoriController@index')->name('kategori');
Route::get('/urun/{slug_urunadi}', 'UrunController@index')->name('urun');
Route::get('/sepet', 'SepetController@index')->name('sepet');


