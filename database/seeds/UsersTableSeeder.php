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

       	'name' => 'meropustak admin',
       	'email' => 'admin@admin.com',
       	'password' => bcrypt('123456'),
       	'updated_at' => new DateTime(),
        'created_at' => new DateTime()


       	]);
    }
}
