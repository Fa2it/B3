<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pictures', function(){
  return  response()
            ->json([
              ['year'=>2011, 'value'=>40],
              ['year'=>2012, 'value'=>45],
              ['year'=>2013, 'value'=>49],
              ['year'=>2014, 'value'=>55],
              ['year'=>2015, 'value'=>50],
              ['year'=>2016, 'value'=>75],
              ['year'=>2017, 'value'=>80],
              ['year'=>2018, 'value'=>74],
              ['year'=>2019, 'value'=>65],
            ]);
});
