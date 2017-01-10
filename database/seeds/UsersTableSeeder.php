<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => str_random(10),
            'email' => 'jquiroga1991@gmail.com',
            'password' => bcrypt('1234qwer'),
            'rut'=> '179597098',
            'phone'=> '+56984484160',
            'class' => 'admin'
    }
}
