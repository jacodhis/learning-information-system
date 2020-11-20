<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class unitstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('units')->insert([
        [
        	'name' =>'project management',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                ',
            'unitcode' =>'CIT 3300',
            'user_id' => '2',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
        [
        'name' =>'management information systems',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                ',
            'unitcode' =>'CIT 3301',
            'user_id' => '2',
        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
        [
        'name' =>'system analysis and design',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                ',
         'unitcode' =>'CIT 3302',
         'user_id' => '2',
       	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
       	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
        [
        'name' =>'research methodology',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                ',
         'unitcode' =>'CIT 3304',
         'user_id' => '4',
       	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
       	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
        [
        'name' =>'operation research',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                ',
         'unitcode' =>'CIT 3305',
         'user_id' => '4',
       	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
       	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
        [
        'name' =>'data structures and algorithms',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                ',
         'unitcode' =>'CIT 3306',
         'user_id' => '4',
       	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
       	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ]


    ]);
    }
}

