<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user::User::create([
            'name' => 'Supplier',
            'email' => 'supplier@email.com',
            'password' => bcrypt('password'),
        ]);

        $permission = Permission::create(['name' => 'manage_supplier']);

        $permission->givePermissionTo('create-supplier');
        $permission->givePermissionTo('edit-supplier');
        $permission->givePermissionTo('view-supplier');
        $permission->givePermissionTo('delete-supplier');
        $permission->givePermissionTo('list-supplier');

    }
}
