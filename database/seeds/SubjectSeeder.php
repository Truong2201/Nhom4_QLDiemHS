<?php

use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subject')->insert([
            ['mamon' => 'BB01', 'tenmon' => 'Toán', 'sotiet' => '105', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['mamon' => 'BB02', 'tenmon' => 'Ngữ Văn', 'sotiet' => '105', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['mamon' => 'BB03', 'tenmon' => 'Tiếng Anh', 'sotiet' => '105', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['mamon' => 'BB04', 'tenmon' => 'Thể dục', 'sotiet' => '70', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['mamon' => 'BB05', 'tenmon' => 'GDQP&AN', 'sotiet' => '35', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['mamon' => 'XH01', 'tenmon' => 'Lịch sử', 'sotiet' => '70', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['mamon' => 'XH02', 'tenmon' => 'Địa lí', 'sotiet' => '70', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['mamon' => 'XH03', 'tenmon' => 'GDCD', 'sotiet' => '70', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['mamon' => 'TN01', 'tenmon' => 'Vật lí', 'sotiet' => '70', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['mamon' => 'TN02', 'tenmon' => 'Hóa học', 'sotiet' => '70', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['mamon' => 'TN03', 'tenmon' => 'Sinh học', 'sotiet' => '70', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['mamon' => 'CN01', 'tenmon' => 'Công nghệ', 'sotiet' => '70', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['mamon' => 'CN02', 'tenmon' => 'Tin học', 'sotiet' => '70', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['mamon' => 'BB06', 'tenmon' => 'Nghề PT', 'sotiet' => '105', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06']
        ]);
    }
}
