<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/api-docs', function () {
    $file = public_path('api-docs.json');
    $headers = ['Content-Type: application/json'];

    if(File::exists($file)) {
        return Response::file($file, $headers);
    }
    abort(404, 'File not found');
});

