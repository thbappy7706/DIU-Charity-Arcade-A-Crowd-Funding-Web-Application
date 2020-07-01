<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
             'name' => 'Md. Admin',
             'user_name'=>'Admin',
             'user_type'=>'admin',
             'phone'=>' ',
             'photo'=>'',
            'email' => 'admin@gmail.com',
            'password' => Hash::make(12345678),
        ]);

     }
}


/*
 1.php artisan db:seed --class=UsersTableSeeder
2.php artisan db:seed --class=Color_settingsTableSeeder
3.php artisan db:seed --class=General_settingsTableSeeder
 */
