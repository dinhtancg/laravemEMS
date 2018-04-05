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
                'display_name' => 'Delete Role',
                'description' => 'Delete Role'
            ],
            [
                'name' => 'article-list',
                'description' => 'See only Listing Of Item'
            ],
            [
                'name' => 'article-create',
                'description' => 'Create New Item'
            ],
            [
                'name' => 'article-edit',
                'description' => 'Edit Item'
            ],
            [
                'name' => 'article-delete',
                'description' => 'Delete Item'
            ]
        ];


        DB::table('permissions')->delete();
        foreach ($permissions as $permission) {
            DB::table('permissions')->insert($permission);
        };
    }
}
