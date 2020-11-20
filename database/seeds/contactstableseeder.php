<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class contactstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('contacts')->insert([
        [
        	'p_o_box' =>'P.O Box ,972-60200 Meru Kenya',
        	'phone' => '0720102938',
        	'school_id' => '1',
        	'email' => 'sci.must.ac.ke',

        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
         [
         	'p_o_box' =>'P.O Box ,972-60200 Meru Kenya',
        	'phone' => '0709102938',
        	'school_id' => '2',
        	'email' => 'nursing.must.ac.ke',

        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
         [
         	'p_o_box' =>'P.O Box ,972-60200 Meru Kenya',
        	'phone' => '0709102938',
        	'school_id' => '3',
        	'email' => 'bs.must.ac.ke',

        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ],
         [
        	'p_o_box' =>'P.O Box ,972-60200 Meru Kenya',
        	'phone' => '0709102789',
        	'school_id' => '4',
        	'email' => 'enarch.must.ac.ke',

        	'created_at' => Carbon::now()->format('y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('y-m-d H:i:s'),
        ]
    ]);
    }
}
