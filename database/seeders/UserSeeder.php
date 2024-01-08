<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        $adminUser = User::create([
            'name' => 'Kshitij Dhungana',
            'email' => 'admin1@example.com',
            'password' => 'password',
        ]);
        $adminUser->assignRole($adminRole);
    }
}
