<?php


Route::post('/', 'HallController@filter');

//Route::get('/hall', 'HallController@lists')->name('halls');
Route::get('/hall/{hallid}', 'HallController@detail')->name('detail');

Route::get('/halls/mapdata', 'HallController@mapHalls');


// Account routes
Route::get('/account', function () {
    return view('home');
});

// Reponses
Route::post('/add/response', 'ResponseController@store')->name('add_response');

// Разместиться
Route::get('/accommodate', function () {
    return view('accommodate.step-0');
})->name('accommodate');

Route::name('accommodate.')->group(function () {

    // TODO:// изменить название путей
    Route::get('step1', 'AccommodateController@step1')->name('step1');
    Route::get('step2', 'AccommodateController@step2')->name('step2');
    Route::get('step3', 'AccommodateController@step3')->name('step3');
    Route::get('step4', 'AccommodateController@step4')->name('step4');
    Route::get('step5', 'AccommodateController@step5')->name('step5');
    Route::get('thanks', 'AccommodateController@thanks')->name('thanks');

    // Роуты для обработки пошаговых данных POST данные
    Route::post('next_step2', 'AccommodateController@postStep2')->name('post_step2');
    Route::post('next_step3', 'AccommodateController@postStep3')->name('post_step3');
    Route::post('next_step4', 'AccommodateController@postStep4')->name('post_step4');
    Route::post('next_step5', 'AccommodateController@postStep5')->name('post_step5');


});

