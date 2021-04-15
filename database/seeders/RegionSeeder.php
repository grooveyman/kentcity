<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //oti region
    	 DB::table('regions')->insert([
            'name' => 'Oti',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


    	  DB::table('regions')->insert([
            'name' => 'Bono East',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    	    DB::table('regions')->insert([
            'name' => 'Ahafo',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


    	    DB::table('regions')->insert([
            'name' => 'Bono',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


    	    DB::table('regions')->insert([
            'name' => 'North East',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


    	    DB::table('regions')->insert([
            'name' => 'Savannah',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


    	    DB::table('regions')->insert([
            'name' => 'Western North',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


    	    DB::table('regions')->insert([
            'name' => 'Western',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


    	    DB::table('regions')->insert([
            'name' => 'Volta',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


    	    DB::table('regions')->insert([
            'name' => 'Greater Accra',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    	        DB::table('regions')->insert([
            'name' => 'Eastern',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    	         DB::table('regions')->insert([
            'name' => 'Ashanti',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

		    DB::table('regions')->insert([
		            'name' => 'Northern',
		            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
		        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);

		    DB::table('regions')->insert([
		            'name' => 'Upper East',
		            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
		        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);


		   DB::table('regions')->insert([
		            'name' => 'Upper West',
		            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
		        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);

		      DB::table('regions')->insert([
		            'name' => 'Central',
		            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
		        	'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);



    }
}
