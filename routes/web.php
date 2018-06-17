<?php

Route::get('/', 'Template\HomeController@index');

Route::get('/{joker}', function () {
    return redirect('/');
});