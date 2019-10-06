<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'name' => 'Developer',
            'code' => 'developer',
            'permissions' => '{"viewing_menu":["users","groups"]}',
            'description' => 'Developer',
            'updated_at' => new DateTime,
            'created_at' => new DateTime,
        ]);
        DB::table('groups')->insert([
            'name' => 'Super Admin',
            'code' => 'superadmin',
            'permissions' => '{"viewing_menu":["users","groups"]}',
            'description' => 'Super Admin',
            'updated_at' => new DateTime,
            'created_at' => new DateTime,
        ]);
    }
}
