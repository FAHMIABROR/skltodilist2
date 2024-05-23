<?php

use Illuminate\Support\Facades\Route;

Route::resource('/posts', \App\Http\Controllers\Postcontroller::class);