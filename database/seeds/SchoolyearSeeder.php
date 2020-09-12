<?php

use Illuminate\Database\Seeder;

class SchoolyearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schoolyear')->insert([
            ['mahanhkiem' => 'K01', 'start' => '2017-09-05', 'end' => '2018-05-25', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['mahanhkiem' => 'K02', 'start' => '2018-09-05', 'end' => '2019-05-25', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['mahanhkiem' => 'K03', 'start' => '2019-09-05', 'end' => '2020-05-25', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06']
        ]);
    }
}
