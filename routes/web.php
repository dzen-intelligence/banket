<?php

require_once 'app_routes/approutes.php';

Route::get('/', function () {
    return view('halls.lists');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('halls', function () {


    $halls = App\Models\Halls::query()->with('types', 'additions')->get();

    $allTypes = App\Models\Types::all();

    foreach ($allTypes as $t) {
        echo '<span style="color: blue">'. $t->name . ' </span>';
    }


    foreach ($halls as $hall) {
        echo '<h3>' . $hall->title . '</h3>';
        echo 'Тип заведения: <b>' . $hall->types->name . '</b></br>';
        echo $hall->description . '</br>';

        foreach ($hall->additions as $addition) {
            echo 'Дополнения: <b>'. $addition->name . '</b></br>';
        }

        echo '____________________________________ </br>';
    }


});
