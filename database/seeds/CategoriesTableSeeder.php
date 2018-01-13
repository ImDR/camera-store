<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('categories')->insert([
			[
				'name' => 'Nikon',
				'type' => 'Mirrorless',
				'model' => 2018
			],
			[
				'name' => 'Canon',
				'type' => 'Full frame',
				'model' => 2015
			],
			[
				'name' => 'Nikon',
				'type' => 'Full frame',
				'model' => 2015
			],
			[
				'name' => 'Canon',
				'type' => 'Point and Shoot',
				'model' => 2017
			]
		]);
    }
}
