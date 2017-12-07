<?php
use Illuminate\Http\Request;

Route::middleware('api')->get('/user', function(Request $request) {
    return App\User::paginate();
});
