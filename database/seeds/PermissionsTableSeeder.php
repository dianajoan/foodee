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
                'name'          => 'can_view_right_menu',
                'display_name'  => 'Can view right colour menu',
                'description'   => 'Can view and update the right color menu',
            ],
            [
                'name'          => 'view_roles',
                'display_name'  => 'View saved roles',
                'description'   => 'Can view all saved roles',
            ],
            [
                'name'          => 'create_role',
                'display_name'  => 'Create a role',
                'description'   => 'Can create a new role',
            ],
            [
                'name'          => 'edit_role',
                'display_name'  => 'Edit a role',
                'description'   => 'Can edit a role',
            ],
            [
                'name'          => 'delete_role',
                'display_name'  => 'Delete a role',
                'description'   => 'Can delete a role',
            ],
            // permissions
            [
                'name'          => 'can_view_permissions',
                'display_name'  => 'Can view system permissions',
                'description'   => 'A user can view permissions',
            ],
            [
                'name'          => 'can_add_perm',
                'display_name'  => 'Can add a permission',
                'description'   => 'User can add a permission',
            ],
            [
                'name'          => 'can_delete_perm',
                'display_name'  => 'Can delete a permission',
                'description'   => 'A user ca delete a system permission',
            ],
            // users
            [
                'name'          => 'create_user',
                'display_name'  => 'Create a user',
                'description'   => 'Can create a new user',
            ],
            [
                'name'          => 'edit_user',
                'display_name'  => 'Can edit user profile',
                'description'   => 'edit any user\'s profile',
            ],
            [
                'name'          => 'delete_user',
                'display_name'  => 'Can delete a user',
                'description'   => 'Can delete any user\'s profile',
            ],
            // messages
            [
                'name'          => 'can_message',
                'display_name'  => 'Can use messaging',
                'description'   => 'User can use the messaging platform',
            ],
            [
                'name'          => 'can_send_message',
                'display_name'  => 'Can send message',
                'description'   => 'User can send a message',
            ],
            [
                'name'          => 'can_send_send_public_message',
                'display_name'  => 'Can send a public message',
                'description'   => 'User can send a public message to all',
            ],
            // comments
            [
                'name'          => 'can_make_comment',
                'display_name'  => 'Can comment on system resources',
                'description'   => 'A user can add a comment',
            ],
            [
                'name'          => 'can_edit_comment',
                'display_name'  => 'Can edit a comment',
                'description'   => 'A user can edit a user comment',
            ],
            [
                'name'          => 'can_delete_comment',
                'display_name'  => 'Can delete a comment',
                'description'   => 'A user can delete a comment',
            ],
            // companies
            [
                'name'          => 'can_view_companies',
                'display_name'  => 'Can view saved companies',
                'description'   => 'A user can view all saved companies',
            ],
            [
                'name'          => 'can_add_company',
                'display_name'  => 'Can create a company',
                'description'   => 'A user can add a new company',
            ],
            [
                'name'          => 'can_update_company',
                'display_name'  => 'Can update company details',
                'description'   => 'A user can update a saved company details',
            ],
            [
                'name'          => 'can_delete_company',
                'display_name'  => 'Can delete company',
                'description'   => 'A user can delete a saved company',
            ],
            [
                'name'          => 'can_make_image_uploads',
                'display_name'  => 'Can upload images to the system',
                'description'   => 'A user can upload images to system',
            ],
            // salons and shops
            [
                'name'          => 'can_add_salon',
                'display_name'  => 'Can craete a salon',
                'description'   => 'A user can add a a new salon and make themselves salon admin',
            ],
            [
                'name'          => 'can_edit_salon',
                'display_name'  => 'Can edit their salon',
                'description'   => 'A user can edit the profile of their salon',
            ],
            [
                'name'          => 'can_delete_salon',
                'display_name'  => 'Can delete a salon or spa',
                'description'   => 'A user can delete a salon profile or spa from the system',
            ],
            // jobs
            [
                'name'          => 'can_view_jobs',
                'display_name'  => 'Can view all job openings',
                'description'   => 'A user can view the current job opening',
            ],
            [
                'name'          => 'can_add_job_opening',
                'display_name'  => 'Can add a job opening',
                'description'   => 'A user can add a job opening',
            ],
            [
                'name'          => 'can_respond_to_jobs',
                'display_name'  => 'Can respond to job openings',
                'description'   => 'A user can respond to job openings on the platform',
            ],
            [
                'name'          => 'can_delete_job_opening',
                'display_name'  => 'Can delete a job opening',
                'description'   => 'A user can delete a job opening',
            ],
            // posts
            [
                'name'          => 'can_view_posts',
                'display_name'  => 'Can view posts',
                'description'   => 'A user can view posts',
            ],
            [
                'name'          => 'can_add_post',
                'display_name'  => 'Can add a post',
                'description'   => 'A user can add a post',
            ],
            [
                'name'          => 'can_delete_post',
                'display_name'  => 'Can delete a post',
                'description'   => 'A user can delete a post',
            ],
            // questions
            [
                'name'          => 'can_view_questions',
                'display_name'  => 'Can view questions',
                'description'   => 'A user can view a questions',
            ],
            [
                'name'          => 'can_add_questions',
                'display_name'  => 'Can add questions',
                'description'   => 'A user can add questions',
            ],
            [
                'name'          => 'can_delete_questions',
                'display_name'  => 'Can delete a question',
                'description'   => 'A user can delete a questions',
            ],
            [
                'name'          => 'can_update_questions',
                'display_name'  => 'Can view update questions',
                'description'   => 'A user can update questions',
            ],

            // ratings
            [
                'name'          => 'can_rate',
                'display_name'  => 'Can make rating',
                'description'   => 'A user can make a rating',
            ],
            [
                'name'          => 'can_update_rate',
                'display_name'  => 'Can update a rating',
                'description'   => 'A user can update a rating',
            ],

            // reviews
            [
                'name'          => 'can_review',
                'display_name'  => 'Can make reviews',
                'description'   => 'A user can make reviews',
            ],
            [
                'name'          => 'can_update_review',
                'display_name'  => 'Can update a review',
                'description'   => 'A user can update a saved review',
            ],

            // bookings
            [
                'name'          => 'can_make_booking',
                'display_name'  => 'Can make a booking',
                'description'   => 'A user can make a booking for products and services',
            ],

            // teams
            [
                'name'          => 'can_make_teams',
                'display_name'  => 'Can make a team',
                'description'   => 'A user can make a team of users on the platform',
            ],

            // 
            // [
            //     'name'          => '',
            //     'display_name'  => '',
            //     'description'   => '',
            // ],
            // [
            //     'name'          => '',
            //     'display_name'  => '',
            //     'description'   => '',
            // ],
            // [
            //     'name'          => '',
            //     'display_name'  => '',
            //     'description'   => '',
            // ],
        ];
        foreach ($permissions as $key => $value) {
            Permission::create($value);
        }

    }
}
