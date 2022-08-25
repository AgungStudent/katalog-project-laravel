<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::insert([
            'name_contact'=> 'email',
            'value'=> 'sidocvmulyo@gmail.com'
        ]);
        Contact::insert([
            'name_contact'=> 'telp',
            'value'=> '+6288808888880'
        ]);
    }
}
