<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Str;
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
        // Admin
        $adminProfile = Profile::create([
            'name' => 'Administrator',
            'id_card_number' => 00000000,
            'sex' => 'Other',
            'email' => 'admin@mail.com'
        ]);

        $admin = User::create([
            'profile_id' => $adminProfile->id,
            'name' => $adminProfile->name,
            'email' => $adminProfile->email,
            'email_verified_at' => now(),
            'password' => bcrypt('adminadmin'),
            'remember_token' => Str::random(10),
        ]);

        $admin->assignRole('admin');

        // User
        $userProfile = Profile::create([
            'name' => 'Muhamad Isro',
            'id_card_number' => 640123232,
            'sex' => 'male',
            'email' => 'isro@mail.com'
        ]);

        $user = User::create([
            'profile_id' => $userProfile->id,
            'name' => $userProfile->name,
            'email' => $userProfile->email,
            'email_verified_at' => null,
            'password' => bcrypt('isroo123'),
            'remember_token' => null,
        ]);

        $user->assignRole('user');
    }
}
