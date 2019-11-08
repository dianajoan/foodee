<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
        	[
        		'name'			=> 'create_role',
	        	'display_name'	=> 'Create a role',
	        	'description'	=> 'Can create a new role',
        	],
        	[
        		'name'			=> 'edit_role',
	        	'display_name'	=> 'Edit a role',
	        	'description'	=> 'Can edit a role',
        	],
        	[
        		'name'			=> 'delete_role',
	        	'display_name'	=> 'Deletea role',
	        	'description'	=> 'Can delete a role',
        	],
        	[
        		'name'			=> 'create_user',
	        	'display_name'	=> 'Create a user',
	        	'description'	=> 'Can create a new user',
        	],
        	[
        		'name'			=> 'edit_user',
	        	'display_name'	=> 'Can edit user profile',
	        	'description'	=> 'edit any user\'s profile',
        	],
        	[
        		'name'			=> 'delete_user',
	        	'display_name'	=> 'Can delete user',
	        	'description'	=> 'Can delete any user\'s profile',
        	],
        	[
        		'name'			=> 'change_user_role',
	        	'display_name'	=> 'Can change user role',
	        	'description'	=> 'Can change any user\'s system previleges',
        	], /*
        	[
        		'name'			=> '',
	        	'display_name'	=> '',
	        	'description'	=> '',
        	],
        	[
        		'name'			=> '',
	        	'display_name'	=> '',
	        	'description'	=> '',
        	],
        	[
        		'name'			=> '',
	        	'display_name'	=> '',
	        	'description'	=> '',
        	], */
        ];

        foreach ($permissions as $key => $value) {
        	Permission::create($value);
        }
    }
}
