<?php

use App\User;
use App\Role;
use App\Permission;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = User::create([
            'name' => 'user',
            'email' => 'user@gm.com',
            'password' => bcrypt('123123')
        ]);

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gm.com',
            'password' => bcrypt('123123')
        ]);

        $clientRole = Role::create([
            'name' => 'user',
            'display_name' => 'Project\'s client',
            'description' => 'All users can mananage this application with their permissions.'
        ]);

        $adminRole = Role::create([
            'name' => 'admin',
            'display_name' => 'Project\'s administrator',
            'description' => 'The user can mananage all users in this applcaitions.'
        ]);

        $createPost = Permission::create([
            'name' => 'create-post',
            'display_name' => 'Create Posts',
            'description' => 'Enable to create post'
        ]);

        $updatePost = Permission::create([
            'name' => 'update-post',
            'display_name' => 'Update Posts',
            'description' => 'Enable to update post'
        ]);

        $deletePost = Permission::create([
            'name' => 'delete-post',
            'display_name' => 'Delete Posts',
            'description' => 'Enable to delete post'
        ]);

        $viewPost = Permission::create([
            'name' => 'view-post',
            'display_name' => 'View Posts',
            'description' => 'Enable to view post'
        ]);

        $listPost = Permission::create([
            'name' => 'list-post',
            'display_name' => 'List Posts',
            'description' => 'Enable to view and list post'
        ]);

        $client->attachRole($clientRole);
        $admin->attachRole($adminRole);

        $clientRole->attachPermission($listPost);
        $clientRole->attachPermission($createPost);
        $clientRole->attachPermission($updatePost);

        $adminRole->attachPermission($listPost);
        $adminRole->attachPermission($createPost);
        $adminRole->attachPermission($updatePost);
        $adminRole->attachPermission($deletePost);
    }
}
