<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;
use Illuminate\Support\Facades\Artisan;

Route::get('/{slug}', [InvitationController::class, 'show']);
Route::post('/rsvp', [InvitationController::class, 'storeRsvp']);
Route::get('/key', function () {
    Artisan::call('key:generate');
    return 'key generated';
});
Route::get('/migrate', function () {
    Artisan::call('migrate');
    return 'migration done';
});
