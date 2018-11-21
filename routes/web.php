<?php

Route::get('/', 'HomepageController@index');
Route::get('/masuk', function(){
    return view('masuk');
});
Route::get('/trip/{lokasi_destinasi}', 'HomepageController@list_trip')->name('list_trip');

Route::get('/trip/profil/{id}/{username}', 'HomepageController@tripProfil')->name('trip.profil');

Route::get('/trip/titip-barang/{id}', [
	'uses' => 'TitipBarangController@create',
	'as' => 'form.barang'
]);

Route::middleware(['auth'])->group(function (){

    Route::prefix('dashboard')->group(function (){
        Route::get('/home', 'HomepageController@dashboard')->name('dashboard.home');
        Route::resource('profile', 'ProfileController');
        Route::resource('trip', 'TripInternationalController');
        Route::resource('profil', 'ProfileController');
        Route::post('/trip/titip-barang/', 'TitipBarangController@store')->name('tambah.barang');
        Route::get('/titipan/{id}', 'TitipBarangController@index')->name('titipan.index');
        
        Route::get('/penitip/{id}', 'PenitipController@index')->name('penitip.index');
        Route::get('/penitip/diterima/{user_id}/{id}', 'PenitipController@UpdateStatus')->name('barang.diterima');
        Route::get('/penitip/ditolak/{user_id}/{id}', 'PenitipController@TolakBarang')->name('barang.ditolak');


    });

});


Auth::routes();
