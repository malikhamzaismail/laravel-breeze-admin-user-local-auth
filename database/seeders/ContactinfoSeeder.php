<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\ContactInfo;

class ContactinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contactinfo = ['city' => 'burewala', 'state' => 'punjab', 'country' => 'pakistan', 'contact_id' => '1'];

        Contactinfo::create($contactinfo);
    }
}
