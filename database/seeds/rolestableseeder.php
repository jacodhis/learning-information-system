<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class rolestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('roles')->insert([
        [
        	'name' =>'Admin',
        	'programe_id' => '0',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
        [
        	'name' =>'lecturer',
        	'programe_id' => '2',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
        [
        	'name' =>'student',
        	'programe_id' => '3',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ]
    ]);

    }
}
