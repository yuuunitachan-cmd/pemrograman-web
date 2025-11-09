<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/certifications', function () {
    return view('certifications');
});

Route::get('/projects', function () {
    return view('projects');
});

