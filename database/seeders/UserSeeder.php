<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name'=> "Sidomulyo Advertising",
            'email'=> 'sidocvmulyo@gmail.com',
            'password'=> bcrypt('password'),
            'email_verified_at'=> now(),
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}
