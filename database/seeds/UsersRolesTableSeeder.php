<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users_roles = [
            [
                'id' => '1',
                'users_id' => '1',
                'roles_id' => '1',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '2',
                'users_id' => '2',
                'roles_id' => '2',
                'created_at' => Carbon::now(),
            ],[
                'id' => '3',
                'users_id' => '3',
                'roles_id' => '3',
                'created_at' => Carbon::now(),
            ],[
                'id' => '4',
                'users_id' => '4',
                'roles_id' => '4',
                'created_at' => Carbon::now(),
            ],
        ];
        DB::table('users_roles')->truncate();
        foreach ($users_roles as $users_role) {
            DB::table('users_roles')->insert($users_role);
        };
    }
}
