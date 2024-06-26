<?php

namespace Database\Seeders;

use App\Enum\UserProfileEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'profile' => UserProfileEnum::Admin,
            'password' => Hash::make('12345678')
        ]);

        User::factory()->create([
            'id' => 2,
            'profile' => UserProfileEnum::Voluntary
        ]);

        User::factory()->create([
            'id' => 3,
            'profile' => UserProfileEnum::SocialAction
        ]);
    }
}
