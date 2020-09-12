<?php

use Illuminate\Database\Seeder;

class CreatePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            ['name' => 'grade-list', 'dname' => 'Xem danh sách Khối', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //1 Admin
            ['name' => 'grade-add', 'dname' => 'Thêm Khối', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //2 Admin
            ['name' => 'grade-delete', 'dname' => 'Xóa Khối', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //3 Admin
            ['name' => 'grade-edit', 'dname' => 'Sửa Khối', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //4 Admin
            ['name' => 'schoolyear-add', 'dname' => 'Thêm Năm học', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //5 Admin
            ['name' => 'schoolyear-delete', 'dname' => 'Xóa Năm học', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //6 Admin
            ['name' => 'schoolyear-edit', 'dname' => 'Sửa Năm học', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //7 Admin
            ['name' => 'class-list', 'dname' => 'Xem danh sách Lớp', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //8 Admin
            ['name' => 'class-add', 'dname' => 'Thêm Lớp', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //9 Admin
            ['name' => 'class-delete', 'dname' => 'Xóa Lớp', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //10 Admin
            ['name' => 'class-edit', 'dname' => 'Sửa lớp', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //11 Admin, GVCN
            ['name' => 'student-list', 'dname' => 'Xem danh sách học sinh', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //12 Admin
            ['name' => 'student-add', 'dname' => 'Thêm thông tin Học sinh', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //13 Admin
            ['name' => 'student-delete', 'dname' => 'Xóa thông tin Học sinh', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //14 Admin
            ['name' => 'student-edit', 'dname' => 'Sửa thông tin Học sinh', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //15 Admin, GVCN
            ['name' => 'teacher-list', 'dname' => 'Xem danh sách giáo viên', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //16 Admin, GVCN, GVBM
            ['name' => 'teacher-add', 'dname' => 'Thêm thông tin Giáo viên', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //17 Admin
            ['name' => 'teacher-delete', 'dname' => 'Xóa thông tin Giáo viên', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //18 Admin
            ['name' => 'teacher-edit', 'dname' => 'Sửa thông tin Giáo viên', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //19 Admin
            ['name' => 'point-add', 'dname' => 'Nhập điểm', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //20 GVBM, GVCN
            ['name' => 'point-list', 'dname' => 'Xem điểm', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //21 Admin, GVBM, GVCN, Học sinh
            ['name' => 'point-edit', 'dname' => 'Sửa điểm', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //22 GVBM, GVCN
            ['name' => 'point-send', 'dname' => 'Gửi điểm', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //23 GVCN
            ['name' => 'user-add', 'dname' => 'Tạo user', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //24 Admin
            ['name' => 'user-edit', 'dname' => 'Sửa user', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //25 Admin
            ['name' => 'user-delete', 'dname' => 'Xóa user', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //26 Admin
            ['name' => 'role-add', 'dname' => 'Thêm Role', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //27 Admin
            ['name' => 'role-delete', 'dname' => 'Xóa Role', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //28 Admin
            ['name' => 'role-edit', 'dname' => 'Sửa Role', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //29 Admin
            ['name' => 'schoolyear-list', 'dname' => 'Danh sách năm học', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //30 Admin
            ['name' => 'permission-list', 'dname' => 'Danh sách quyền', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //31 Admin
            ['name' => 'permission-add', 'dname' => 'Thêm quyền', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //32 Admin
            ['name' => 'permission-edit', 'dname' => 'Sửa quyền', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //33 Admin
            ['name' => 'permission-delete', 'dname' => 'Xóa quyền', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //34 Admin
            ['name' => 'user-list', 'dname' => 'Danh sách user', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //35 Admin
            ['name' => 'role-list', 'dname' => 'Danh sách Role', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06'], //35 Admin
        ]);
    }
}
