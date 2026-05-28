<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {

    $response = Http::get('https://rickandmortyapi.com/api/character');

    $characters = $response->json()['results'];

    return view('characters', compact('characters'));

});
