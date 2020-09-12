<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            ['tengiaovien' => 'Trần Thanh Thiên', 'gioitinh' => '0', 'ngaysinh' => '2020-02-20', 'diachi' => 'tp.Hồ Chí Minh', 'gmail' => 'thanhthientran1207@gmail.com', 'sdt' => '0971197625', 'ngaytuyendung' => '2020-02-20', 'sub_id' => '2', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['tengiaovien' => 'Nguyễn Thụy Uyên Nhi', 'gioitinh' => '1', 'ngaysinh' => '2020-02-20', 'diachi' => 'tp.Hồ Chí Minh', 'gmail' => 'nguyennhibentre6868@gmail.com', 'sdt' => '0123456789', 'ngaytuyendung' => '2020-02-20', 'sub_id' => '2', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['tengiaovien' => 'Vũ Văn Trường', 'gioitinh' => '0', 'ngaysinh' => '2020-02-20', 'diachi' => 'tp.Hồ Chí Minh', 'gmail' => 'vuvantruong@gmail.com', 'sdt' => '0987654321', 'ngaytuyendung' => '2020-02-20', 'sub_id' => '2', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
        ]);
    }
}
