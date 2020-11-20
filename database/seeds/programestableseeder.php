<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class programestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('programes')->insert([
        [
        	'name' =>'BBIT',
        	'school_id' => 1,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,uis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
         [
        	'name' =>'COMPSCIENCE',
        	'school_id' => 1,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,uis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
         [
        	'name' =>'BCOM',
        	'school_id' => 3,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,uis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
        [
        	'name' =>'civilEngineering',
        	'school_id' => 4,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,uis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ]
    ]);
    }
}
