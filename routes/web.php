<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    $invitation = \App\Models\Invitation::first();
    if ($invitation) {
        return redirect('/' . $invitation->slug);
    }
    return 'Belum ada data undangan. Silakan tambahkan data di database.';
});

Route::get('/{slug}', [InvitationController::class, 'show']);
Route::post('/rsvp', [InvitationController::class, 'storeRsvp']);
Route::get('/key', function () {
    Artisan::call('key:generate');
    return 'key generated';
});
Route::get('/setup', function () {
    Artisan::call('migrate:fresh', ['--force' => true, '--seed' => true]);
    return 'Database setup (migrate & seed) berhasil!';
});
