<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student')->insert([
            ['mahs' => '123', 'hohs' => 'Trần', 'tenhs' => 'Thanh Thiên', 'phone' => '0971197625', 'gioitinh' => '0', 'ngaysinh' => '2020-02-20', 'quequan' => 'Hà Tĩnh', 'hotencha' => 'Trần Văn A', 'nghenghiepcha' => 'Trồng trọt', 'hotenme' => 'Trần Thị B', 'nghenghiepme' => 'Giáo Viên', 'class_id' => '1', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //1
            ['mahs' => '234', 'hohs' => 'Vũ', 'tenhs' => 'Văn Trường', 'phone' => '0987654321', 'gioitinh' => '0', 'ngaysinh' => '2020-02-20', 'quequan' => 'tp.Hồ Chí Minh', 'hotencha' => 'Vũ Văn A', 'nghenghiepcha' => 'Chủ tịch', 'hotenme' => 'Trần Thị B', 'nghenghiepme' => 'Giám đốc', 'class_id' => '1', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['mahs' => '345', 'hohs' => 'Nguyễn', 'tenhs' => 'Thụy Uyên Nhi', 'phone' => '0123456789', 'gioitinh' => '1', 'ngaysinh' => '2020-02-20', 'quequan' => 'Bến Tre', 'hotencha' => 'Nguyễn Văn A', 'nghenghiepcha' => 'Chủ tịch', 'hotenme' => 'Nguyễn Thị B', 'nghenghiepme' => 'Tổng thống', 'class_id' => '2', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['mahs' => '223', 'hohs' => 'Nguyễn', 'tenhs' => 'Trần', 'phone' => '0334897985', 'gioitinh' => '0', 'ngaysinh' => '2020-02-20', 'quequan' => 'tp.Hồ Chí Minh', 'hotencha' => 'Nguyễn Văn B', 'nghenghiepcha' => 'Phụ HỒ', 'hotenme' => 'Nguyễn Thị B', 'nghenghiepme' => 'Tổng thống', 'class_id' => '1', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['mahs' => '125', 'hohs' => 'Lê', 'tenhs' => 'Thị Nhân', 'phone' => '0731564987', 'gioitinh' => '1', 'ngaysinh' => '2020-02-20', 'quequan' => 'tp.Hồ Chí Minh', 'hotencha' => 'Nguyễn Văn C', 'nghenghiepcha' => 'Cán bộ', 'hotenme' => 'Nguyễn Thị B', 'nghenghiepme' => 'Tổng thống', 'class_id' => '2', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
            ['mahs' => '126', 'hohs' => 'Nguyễn', 'tenhs' => 'Văn A', 'phone' => '0864843614', 'gioitinh' => '1', 'ngaysinh' => '2020-02-20', 'quequan' => 'tp.Hồ Chí Minh', 'hotencha' => 'Nguyễn Văn D', 'nghenghiepcha' => 'Công Nhân', 'hotenme' => 'Nguyễn Thị B', 'nghenghiepme' => 'Tổng thống', 'class_id' => '2', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'],
        ]);
    }
}
