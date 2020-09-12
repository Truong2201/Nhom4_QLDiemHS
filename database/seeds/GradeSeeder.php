<?php

use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grade')->insert([
            ['makhoi' => 'K01', 'tenkhoi' => '12', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['makhoi' => 'K02', 'tenkhoi' => '11', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['makhoi' => 'K03', 'tenkhoi' => '10', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06']
        ]);
    }
}
