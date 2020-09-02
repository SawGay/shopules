<?php

use Illuminate\Database\Seeder;
// use App\Category;
// use App\Subcategory;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Category::class,10)->create();

        //one-to-many relationship with saveMany() method
        //Create 2 records of categories
        factory(App\Category::class,2)->create()->each(function($category){
        	//Seed the relation with 3 subcategories
        	$subcategories= factory(App\Subcategory::class,3)->make();
        	$category->subcategories()->saveMany($subcategories);
        });
    }
}