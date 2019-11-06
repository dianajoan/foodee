<?php

use Illuminate\Database\Seeder;
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
        $super_admin = new Role();
        $super_admin->name = 'super-admin';
        $super_admin->display_name = 'Super Administrator';
        $super_admin->description = 'Admin with all rights of the System';
        $super_admin->save();

        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->display_name = 'Administrator';
        $role_admin->description = 'System\'s Head Administrator';
        $role_admin->save();

        $role_registra = new Role();
        $role_registra->name = 'designer';
        $role_registra->display_name = 'Craft Designer';
        $role_registra->description = 'An art making user for marketing';
        $role_registra->save();

        $role_clerk = new Role();
        $role_clerk->name = 'editor';
        $role_clerk->display_name = 'Content Editor';
        $role_clerk->description = 'A user with editing rights of content';
        $role_clerk->save();

        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->display_name = 'Normal User';
        $role_user->description = 'A user signed up with an account';
        $role_user->save();

        $role_guest = new Role();
        $role_guest->name = 'guest';
        $role_guest->display_name = 'Guest User';
        $role_guest->description = 'A user reviewing the system';
        $role_guest->save();
    }
}
