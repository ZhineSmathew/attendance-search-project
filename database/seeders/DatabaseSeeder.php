<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\ExternalUser;
use App\Models\InternalUser;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $internalUser = InternalUser::create([
            'username' => 'adminUser',
            'email' => 'adminUser@example.com',
            'phone' => '2211445577',
            'password' => Hash::make('password')
        ]);
        $externalUser = ExternalUser::create([
            'user_id' => $internalUser->id,
            'phone_2' => '2255887744',
            'address' => 'Kerala',
            'dob' => '2000-06-05',
        ]);
        $attendance = Attendance::create([
            'internal_user_id' => $internalUser->id,
            'external_user_id' => $externalUser->id,
            'login_time' => now(),
            'login_out' =>  now(),
        ]);
    }
}
