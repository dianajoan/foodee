<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Models\User;

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
        $user_super->email = 'dianajoanita900@gmail.com';
        $user_super->password = bcrypt('dollar256');
        $user_super->gender = 'Female';
        $user_super->work_address = 'Kampala, Uganda';
        $user_super->place_of_work = 'Kampala, Uganda';
        $user_super->home_address = 'Kampala, Uganda';
        $user_super->role = 'super-admin';
        $user_super->nationality = 'Ugandan';
        $user_super->occupation = 'Software Developer';
        $user_super->bio = 'Am a Christian!';
        $user_super->status = 'active';
        $user_super->save();
        
        $user_super->attachRole(Role::where('name','super-admin')->first());
        
        $user_admin = new User();
        $user_admin->name = 'User One'; 
        $user_admin->email = 'user@user.com';
        $user_admin->password = bcrypt('dollar256');
        $user_admin->gender = 'Male';
        $user_super->work_address = 'Kampala, Uganda';
        $user_super->place_of_work = 'Kampala, Uganda';
        $user_super->home_address = 'Kampala, Uganda';
        $user_admin->role = 'admin';
        $user_admin->nationality = 'Ugandan';
        $user_admin->bio = 'Am a Christian!';
        $user_admin->status = 'active';
        $user_admin->save();
        
        $user_admin->attachRole(Role::where('name','admin')->first());
    }
}
