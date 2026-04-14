<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $fillable = [
    'slug',
    'nama_pria',
    'nama_wanita',
    'tanggal',
    'lokasi',
    'maps_link',
];
}
