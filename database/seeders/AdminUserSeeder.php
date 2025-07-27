<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'admin@arkpower.com'],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('admin123'),
                'email_verified_at' => now(),
            ]
        );

        $role = Role::firstOrCreate(['name' => 'Super Admin']);
        $role->syncPermissions(Permission::all());
        $user->assignRole($role);

        $this->command->info('Super Admin user created successfully!');
        $this->command->info('Email: admin@arkpower.com');
        $this->command->info('Password: admin123');
    }
}