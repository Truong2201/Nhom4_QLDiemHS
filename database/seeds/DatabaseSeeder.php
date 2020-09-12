<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CreatePermissionSeeder::class);
        $this->call(CreateRoleSeeder::class);
        $this->call(PermissionRoleSeeder::class);
        $this->call(RoleUserSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(SchoolyearSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(ClassSeeder::class);
        $this->call(StudentSeeder::class);
    }
}
