<?php

use Illuminate\Database\Seeder;

class CreateRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'Quản trị viên', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //1
            ['name' => 'Giáo viên bộ môn', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //2
            ['name' => 'Giáo viên chủ nhiệm', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //3
            ['name' => 'Học sinh', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //4
        ]);
    }
}
