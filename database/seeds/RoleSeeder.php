<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'slug' => 'admin'
        ]);
        DB::table('roles')->insert([
            'name' => 'Agent',
            'slug' => 'agent'
        ]);
        DB::table('roles')->insert([
            'name' => 'Candidate',
            'slug' => 'candidate'
        ]);
    }
}
