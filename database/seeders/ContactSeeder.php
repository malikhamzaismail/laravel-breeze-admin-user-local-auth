<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contact = ['phone' => '456789321', 'address' => 'Model town Burewala', 'user_id' => '1'];

        Contact::create($contact);
    }
}
