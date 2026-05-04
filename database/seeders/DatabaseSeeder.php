<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        \App\Models\Invitation::firstOrCreate(
            ['slug' => 'kevin-chelsea'],
            [
                'nama_pria' => 'Kevin',
                'nama_wanita' => 'Chelsea',
                'tanggal' => '2026-06-24',
                'lokasi' => 'Gereja',
                'maps_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.9200016131126!2d98.702882!3d3.6057869999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031319de092fdeb%3A0x6909c94625253057!2sGereja%20HKBP%20Pardamean!5e0!3m2!1sid!2sid!4v1777794554657!5m2!1sid!2sid'
            ]
        );
    }
}
