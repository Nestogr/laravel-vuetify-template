<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'root',
            'email' => 'root@example.com',
            'password' => 'root',
        ]);
    }
}
