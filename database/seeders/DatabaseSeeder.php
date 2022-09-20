<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            EventTypesSeeder::class,
            PermissionRoleTableSeeder::class,
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            RoleUserSeeder::class,
            UsersTableSeeder::class,
            LocationsTableSeeder::class,
            VenuesTableSeeder::class
               
        ]);
    }
}
