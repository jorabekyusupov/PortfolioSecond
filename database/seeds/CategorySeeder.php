<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name'=>'Full'
        ]);
        Category::create([
        	'name'=>'Frontend'
        ]);
        Category::create([
        	'name'=>'Backend'
        ]);
    
    }
}
