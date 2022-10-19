<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();
        User::create([
            'name' => 'Admin',
            'email' => 'admin@google.com',
            'email_verified_at' => $date,
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);
    }
}
