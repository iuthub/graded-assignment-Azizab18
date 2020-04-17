<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('items')->insert();

        $items=array(
        	array(
         'name'=>'hi',
          'owner_id'=>'1',
          'done'=>false


),

        	arra(
        		'name'=>'hi',
          'owner_id'=>'1',
          'done'=>true

        	)
        );
        DB::table('items')->insert($items);
    }
}