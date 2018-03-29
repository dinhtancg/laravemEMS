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
                'name' => 'root',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '2',
                'name' => 'secrectory',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '3',
                'name' => 'editor',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '4',
                'name' => 'author',
                'created_at' => Carbon::now(),
            ],
        ];
        DB::table('roles')->truncate();
        foreach ($roles as $role) {
            DB::table('roles')->insert($role);
        };
    }
}
