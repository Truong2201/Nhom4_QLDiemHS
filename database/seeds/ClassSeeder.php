<?php

use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class')->insert([
            ['malop' => '001', 'tenlop' => '12A', 'siso' => '45', 'grade_id' => '1', 'schoolyear_id' => '3', 'teachers_id' => '2', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //1
            ['malop' => '002', 'tenlop' => '11A', 'siso' => '43',  'grade_id' => '2', 'schoolyear_id' => '3', 'teachers_id' => '3', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //2                        
        ]);
    }
}
