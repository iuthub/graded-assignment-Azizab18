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
        DB::table('users')->insert();

        $users=array(
        	array(
         'name'=>'Sarvinoz',
          'password'=>'Sarvinoz',
          'email'=>'Sarvinoz@gmail.com'


)
        );
        DB::table('users')->insert($users);
    }
}