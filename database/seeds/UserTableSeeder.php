<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => '$2y$10$wPD725KEX5Av5wPlGnphBODNQEPiRAklcvgrwh9/54JGMUvNhzAx6', 'created_at' => '2020-09-03 21:40:06', 'updated_at' => '2020-09-03 21:40:06']
        ]);
    }
}
