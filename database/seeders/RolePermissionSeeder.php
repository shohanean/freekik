<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Carbon\Carbon;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create all the permission that we will need
        Permission::create(['name' => 'can add role']);
        Permission::create(['name' => 'can edit role']);
        Permission::create(['name' => 'can delete role']);
        Permission::create(['name' => 'can see role list']);
        Permission::create(['name' => 'can add user']);
        Permission::create(['name' => 'can edit user']);
        Permission::create(['name' => 'can delete user']);
        Permission::create(['name' => 'can see user list']);
        Permission::create(['name' => 'can take backup']);
        Permission::create(['name' => 'can restore user']);
        Permission::create(['name' => 'can manage category manager']);
        //create the 'Super Admin' role
        $role = Role::create(['name' => 'Super Admin']);
        //sync all permission to the 'Super Admin' role
        $role->syncPermissions(Permission::all());
        //assign the 'Super Admin' role to the user
        User::find(1)->assignRole($role);

        /*
        Only for this project:
        As this project is a marketplace so we need a special
        role called as "Contributor" with some permission
        */
        $contributor_role = Role::create(['name' => 'Contributor']);

        $contributor_permission1 = Permission::create(['name' => 'contributor access']);
        $contributor_role->syncPermissions($contributor_permission1);
    }
}
