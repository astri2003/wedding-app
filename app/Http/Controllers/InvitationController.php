<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Rsvp;

class InvitationController extends Controller
{
   public function show($slug)
    {
        $invitation = \App\Models\Invitation::where('slug', $slug)->firstOrFail();

        $guestName = request('to'); // ambil dari URL

        $rsvps = \App\Models\Rsvp::latest()->get();

        return view('invitation', compact('invitation', 'guestName', 'rsvps'));
        }

    public function storeRsvp()
    {
        $rsvp = \App\Models\Rsvp::create([
            'invitation_id' => 1,
            'nama' => request('nama'),
            'status' => request('status'),
            'ucapan' => request('ucapan'),
        ]);

        return response()->json([
            'success' => true,
            'data' => $rsvp
        ]);
    }
}


