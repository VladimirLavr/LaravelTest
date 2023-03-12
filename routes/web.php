<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('contact');
})->name('contact');


Route::post(
    '/contact/submit',
    'App\Http\Controllers\ContactController@submit'
)->name('contact-form');


Route::get(
    '/contact/{uuid} ',
    'App\Http\Controllers\ContactController@showOneMessage'
)->name('contact-data-one');
