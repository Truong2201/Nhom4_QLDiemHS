<?php

use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user')->insert([
            ['role_id' => '1', 'user_id' => '1', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06']
        ]);
    }
}
