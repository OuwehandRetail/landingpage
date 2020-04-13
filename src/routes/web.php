<?php

Route::get('/', OuwehandRetail\Landingpage\Http\Controllers\LandingpageController::class .'@index')->name('landingpage.index');
