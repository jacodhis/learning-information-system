<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class schoolstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('schools')->insert([
             [
          'name' =>'No School Allocated',
        
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,uis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.',
          'created_at' => Carbon::now()->format('y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
        [
        	'name' =>'School of Computing and Informatics',
        
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,uis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
         [
        	'name' =>'School of Nursing',
        
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,uis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
         [
        	'name' =>'School of Business and Economics',
        
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,uis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
        [
        	'name' =>'School of Engineering and Achitecture',
        
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,uis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ], [
          'name' =>'School of Engineering and Achitecture',
        
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,uis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.',
          'created_at' => Carbon::now()->format('y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ]

    ]);

    }
}
