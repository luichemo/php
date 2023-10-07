<?php

use Illuminate\Support\Facades\Route;



Route::get('/name', function () {
    return "hello world";
});

Route::get('/name', function () {
    return "Luka";
});
Route::get('/surname', function () {
    return "Chemia";
});

Route::get('/hobbies', function () {
    return "Singing";
});
Route::get('/age', function () {
    return 21;
});



Route::post('/update-info', function () {
    return response()->hson([
        "შეტყობინება " => "წარმატებით განახლდა!"
    ]);
});

Route::put('/update-info', function () {
    return response()->hson([
        "შეტყობინება " => "წარმატებით დაემატა"
    ]);
});


Route::delete('/update-info', function () {
    return response()->hson([
        "შეტყობინება " => "წარმატებით წაიშალა"
    ]);
});








