<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Supplier',
            'email' => 'supplier@email.com',
            'password' => bcrypt('password'),
        ]);

        $user1 = User::create([
            'name' => 'Administrator',
            'email' => 'admin@email.com',
            'password' => bcrypt('password'),
        ]);

        $managePermission = Permission::create(['name' => 'manage-suppliers']);

        $createSupplierPermission = Permission::create(['name' => 'create-supplier']);
        $editSupplierPermission = Permission::create(['name' => 'edit-supplier']);
        $viewSupplierPermission = Permission::create(['name' => 'view-supplier']);
        $deleteSupplierPermission = Permission::create(['name' => 'delete-supplier']);
        $listSupplierPermission = Permission::create(['name' => 'list-supplier']);

        $managePermission->givePermissionTo($createSupplierPermission);
        $managePermission->givePermissionTo($editSupplierPermission);
        $managePermission->givePermissionTo($viewSupplierPermission);
        $managePermission->givePermissionTo($deleteSupplierPermission);
        $managePermission->givePermissionTo($listSupplierPermission);

        $user->givePermissionTo($managePermission);
    }
}
