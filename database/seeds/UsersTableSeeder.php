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

        [
          'name' => 'Admin',
        'email' => 'admin@admin.com',
        'password' => bcrypt('123456'),
        'updated_at' => new DateTime(),
        'created_at' => new DateTime()
        ],

        [

        'name' => 'Content',
        'email' => 'test@test.com',
        'password' => bcrypt('123456'),
        'updated_at' => new DateTime(),
        'created_at' => new DateTime()


        ],

        [

        'name' => 'Admin1',
        'email' => 'admin1@admin.com',
        'password' => bcrypt('123456'),
        'updated_at' => new DateTime(),
        'created_at' => new DateTime()




        ],

       


       	]);
    }
}
