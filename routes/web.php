<?php

use Illuminate\Support\Facades\Route;

Route::get('/error', function () {
    throw new Exception(__('Error!'));
});
