<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    protected $fillable = [
    'invitation_id',
    'nama',
    'status',
    'ucapan'
];
}
