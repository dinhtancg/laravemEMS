<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => '1',
                'name' => 'Root',
                'created_at' => Carbon::now(),
                'slug' => 'root',
                'permissions' =>  json_encode( array(
                    "create-post" => true,
                    "update-post" => true,
                )),
            ],
            [
                'id' => '2',
                'name' => 'Secrectory',
                'created_at' => Carbon::now(),
                'slug' => 'secrectory',
                'permissions' => json_encode(  array(
                    "publish-post" => true,
                )),
            ],
            [
                'id' => '3',
                'name' => 'Editor',
                'created_at' => Carbon::now(),
                'slug' => 'editor',
                'permissions' => json_encode( array(
                    "update-post" => true,
                    "confirm-post" => true,
                )),
            ],
            [
                'id' => '4',
                'name' => 'Author',
                'slug' => 'author',
                'permissions' =>  json_encode( array(
                    "update-post" => true,
                    "create-post" => true,
                )),
                'created_at' => Carbon::now(),
            ],
        ];

        DB::table('roles')->delete();
        foreach ($roles as $role) {
            DB::table('roles')->insert($role);
        };
    }
}
