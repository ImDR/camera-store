<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
			[
				'name' => 'Canon D850',
				'cat_id'=> 2,
				'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consequat,',
				'price'=> 22999.80,
				'make'=> 2016
			],
			[
				'name' => 'Nikon D850',
				'cat_id'=> 3,
				'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit. Aliquam consequat,',
				'price'=> 2009.30,
				'make'=> 2015
			],
			[
				'name' => 'Canon 123',
				'cat_id'=> 2,
				'description'=> 'Lorem ipsum dolor sit amet, Aliquam consequat, consectetur adipiscing elit. Aliquam consequat,',
				'price'=> 12299.80,
				'make'=> 2016
			],
			[
				'name' => 'Canon D22',
				'cat_id'=> 4,
				'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consequat,consectetur adipiscing elit. Aliquam consequat',
				'price'=> 22999.80,
				'make'=> 2018
			],
			[
				'name' => 'Nikon 22',
				'cat_id'=> 1,
				'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consequat,consectetur adipiscing elit.',
				'price'=> 11000.80,
				'make'=> 2016
			]
		]);
    }
}
