<?php


//Route::get('/hall', 'HallController@lists')->name('halls');
Route::get('/hall/{hallid}', 'HallController@detail')->name('detail');

Route::get('/halls/mapdata', 'HallController@mapHalls');

// Account routes
Route::get('/account', function() {
    return view('home');
});

// Разместиться
Route::get('/accommodate', function() {
    return view('accommodate.step-0');
})->name('accommodate');

Route::name('accommodate.')->group(function() {

    Route::get('step1', 'AccommodateController@step1')->name('step1');
    Route::get('step2', 'AccommodateController@step2')->name('step2');
    Route::get('step3', 'AccommodateController@step3')->name('step3');
    Route::get('step4', 'AccommodateController@step4')->name('step4');


});

