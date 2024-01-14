<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create roles
        if (Role::where('name', 'Super Admin')->doesntExist()) {
            Role::create(['name' => 'Super Admin', 'guard_name' => 'web', 'level' => 999]);
        }
        else{
            Role::where('name', 'Super Admin')->update(['level' => 999]);
        }

        if (Role::where('name', 'Admin')->doesntExist()) {
            Role::create(['name' => 'Admin', 'guard_name' => 'web', 'level' => 99]);
        }
        else{
            Role::where('name', 'Admin')->update(['level' => 99]);
        }
        if (Role::where('name', 'User')->doesntExist()) {
            Role::create(['name' => 'User', 'guard_name' => 'web', 'level' => 9]);
        }
        else{
            Role::where('name', 'User')->update(['level' => 9]);
        }
    }
}
