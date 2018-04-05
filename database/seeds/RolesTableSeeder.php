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

            ],
            [
                'id' => '2',
                'name' => 'Secrectory',
                'created_at' => Carbon::now(),
                'slug' => 'secrectory',

            ],
            [
                'id' => '3',
                'name' => 'Editor',
                'created_at' => Carbon::now(),
                'slug' => 'editor',

            ],
            [
                'id' => '4',
                'name' => 'Author',
                'slug' => 'author',
                'created_at' => Carbon::now(),
            ],
        ];

        DB::table('roles')->delete();
        foreach ($roles as $role) {
            DB::table('roles')->insert($role);
        };
    }
}
