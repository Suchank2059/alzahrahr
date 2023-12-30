<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Create admin user
        $adminUser = User::create([
            'name' => 'Kshitij Dhungana',
            'email' => 'alzahranepal@gmail.com',
            'password' => 'password',
        ]);
        $adminUser->assignRole($adminRole);

        // Create regular user
        $regularUser = User::create([
            'name' => 'Regular User',
            'email' => 'regular@example.com',
            'password' => 'password',
        ]);
        $regularUser->assignRole($userRole);
    }
}
