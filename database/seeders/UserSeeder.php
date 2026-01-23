<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $superAdminRole = Role::firstOrCreate([
            'name' => 'super_admin',
            'guard_name' => 'web',
        ]);

        $adminUser = User::firstOrCreate(
            ['email' => 'admin@privatepopcorn.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('Private-Popcorn#2026'),
            ]
        );

        $adminUser->syncRoles([$superAdminRole]);
    }
}