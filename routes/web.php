<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;

Route::get('/{slug}', [InvitationController::class, 'show']);
Route::post('/rsvp', [InvitationController::class, 'storeRsvp']);
