<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
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
                'name' => 'role-list',
                'description' => 'Display Role Listing'
            ],
            [
                'name' => 'role-create',
                'description' => 'Create New Role'
            ],
            [
                'name' => 'role-edit',
                'description' => 'Edit Role'
            ],
            [
                'name' => 'role-delete',
                'description' => 'Delete Role'
            ],
            [
                'name' => 'article-list',
                'description' => 'Display list article'
            ],
            [
                'name' => 'article-create',
                'description' => 'Create New article'
            ],
            [
                'name' => 'article-edit',
                'description' => 'Edit article'
            ],
            [
                'name' => 'article-delete',
                'description' => 'Delete article'
            ],
            [
                'name' => 'user-list',
                'description' => 'Display List user'
            ],
            [
                'name' => 'user-create',
                'description' => 'Create new user'
            ],
            [
                'name' => 'user-edit',
                'description' => 'Edit user'
            ],
            [
                'name' => 'user-delete',
                'description' => 'Delete user'
            ],
            [
                'name' => 'category-list',
                'description' => 'Display List Category'
            ],
            [
                'name' => 'category-create',
                'description' => 'Create New Category'
            ],
            [
                'name' => 'category-edit',
                'description' => 'Edit Category'
            ],
            [
                'name' => 'category-delete',
                'description' => 'Delete Category'
            ],
        ];


        DB::table('permissions')->delete();
        foreach ($permissions as $permission) {
            DB::table('permissions')->insert($permission);
        };
    }
}
