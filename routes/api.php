<?php

use Illuminate\Http\Request;


Route::prefix('/v1')->group(function () {
    Route::get('/', function () {
        return response()->json(
            ['message' => 'api clients'], 200
        );
    });

    Route::resource('clients', 'ClientController')->except(['edit', 'create']);
});
