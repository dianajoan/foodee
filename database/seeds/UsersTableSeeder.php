<?php

use App\Models\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('role_user');
    	
        $user_super = new User();
        $user_super->name = 'Diana Joanita';
        $user_super->email = 'dianajoanita@gmail.com';
        $user_super->password = Hash::make('dollar');
        $user_super->gender = 'Female';
        $user_super->telephone = '0771991162';
        $user_super->location = 'Kampala';
        $user_super->role = 'super-admin';
        $user_super->nationality = 'Ugandan';
        $user_super->occupation = '';
        $user_super->status = 'Active';
        $user_super->save();
        
        $user_super->attachRole(Role::where('name','super-admin')->first());

        $user_admin = new User();
        $user_admin->name = 'Peter Cooker';
        $user_admin->email = 'peter@gmail.com';
        $user_admin->password = Hash::make('dollar');
        $user_admin->gender = 'Male';
        $user_admin->telephone = '';
        $user_admin->location = 'Kampala';
        $user_admin->role = 'admin';
        $user_admin->nationality = 'Ugandan';
        $user_admin->occupation = '';
        $user_admin->status = 'Active';
        $user_admin->save();         

        $user_admin->attachRole(Role::where('name','admin')->first());

        $user_guest = new User();
        $user_guest->name = 'Guest User';
        $user_guest->email = 'guest@gmail.com';
        $user_guest->password = Hash::make('dollar');
        $user_guest->gender = '';
        $user_guest->telephone = '';
        $user_guest->location = '';
        $user_guest->role = 'guest';
        $user_guest->nationality = 'Ugandan';
        $user_guest->occupation = '';
        $user_guest->status = 'Active';
        $user_guest->save();         

        $user_guest->attachRole(Role::where('name','guest')->first());
    }
}
