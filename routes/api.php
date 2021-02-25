<?php

use Illuminate\Http\Request;


Route::prefix('/v1')->group(function () {
    Route::get('/', function () {
        return response()->json(
            ['message' => 'api clientes'], 200
        );
    });

    Route::resource('clientes', 'ClientController')->except(['edit', 'create']);
});
