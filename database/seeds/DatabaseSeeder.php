<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(schoolstableseeder::class);
    	$this->call(contactstableseeder::class);
        $this->call(rolestableseeder::class);
        $this->call(unitstableseeder::class);
        // $this->call(userstableseeder::class);
        $this->call(programestableseeder::class);
        
    }
}
