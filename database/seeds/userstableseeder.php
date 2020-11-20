<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class userstableseeder extends Seeder
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
        	'name' =>'admin',
        	'role_id' => '1',
           
        	'email' => 'admin@gmail.com',
        	'password' =>'12345678',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
         [
        	'name' =>'mageto',
        	'role_id' => '2',
            
        	'email' => 'mageto@gmail.com',
        	'password' =>'12345678',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
         [
        	'name' =>'test',
        	'role_id' => '3',
            
        	'email' => 'test@gmail.com',
        	'password' =>'12345678',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ]

    ]);
    }

}
