<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Permission;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission_role');

        $owner = new Role();
        $owner->name         = 'super-admin';
        $owner->display_name = 'Super Administrator'; // optional
        $owner->description  = 'A technical administrator of the system with full rights'; // optional
        $owner->save();

        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'Administrator'; // optional
        $admin->description  = 'The business administrator with full system operation abilities'; // optional
        $admin->save();

        $role_user = new Role();
        $role_user->name = 'client';
        $role_user->display_name = 'Client';
        $role_user->description = 'A user signed up with a client account to ' . config('app.name');
        $role_user->save();

        $role_guest = new Role();
        $role_guest->name = 'guest';
        $role_guest->display_name = 'Guest User';
        $role_guest->description = 'A user reviewing the system';
        $role_guest->save();

        // attaching roles to super-admin
        $permissions = Permission::all();

        foreach ($permissions as $perm) {
            $owner->attachPermission($perm);
        }
        
    }
}
