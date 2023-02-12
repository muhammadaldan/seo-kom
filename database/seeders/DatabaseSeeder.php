<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Message;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);

        Message::create([
            'name' => 'client1',
            'email' => 'client1@mail.com',
            'phone_number' => '088888881',
            'subject' => 'request order',
            'message' => 'saya ingin menggunakan jasa anda',
        ]);

        Message::create([
            'name' => 'client2',
            'email' => 'client2@mail.com',
            'phone_number' => '088888882',
            'subject' => 'request order',
            'message' => 'saya ingin menggunakan jasa anda',
        ]);
    }
}
