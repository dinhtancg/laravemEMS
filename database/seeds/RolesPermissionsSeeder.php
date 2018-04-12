<?php

use Illuminate\Database\Seeder;

class RolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles_permissions = [
            [
                'permission_id' => '1',
                'role_id' => '1',
            ],
            [
                'permission_id' => '1',
                'role_id' => '2',
            ],
            [
                'permission_id' => '1',
                'role_id' => '3',
            ],
            [
                'permission_id' => '1',
                'role_id' => '4',
            ],
        ];
        DB::table('roles_permissions')->delete();
        foreach ($roles_permissions as $roles_permission) {
            DB::table('roles_permissions')->insert($roles_permission);
        };
    }
}
