<?php

use Illuminate\Database\Seeder;
use App\Portfolio;
class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create([
        	'image'=>'frontend/img/portfolio/shop.png',
        	'title'=>'<a href="https://shop-app-jb.netlify.app/" target="_blank" id="link">A mini Ecommerce React</a> ',
        	'cat_id'=>2
        ]);
        Portfolio::create([
        	'image'=>'frontend/img/portfolio/movies.jpg',
        	'title'=>'<a href="https://react-movie-jb.netlify.app/" target="_blank" id="link">A movie search React</a> ',
        	'cat_id'=>2
        ]);
        Portfolio::create([
        	'image'=>'frontend/img/portfolio/barber.png',
        	'title'=>'<a href="https://jora.uz/projects/thebarber/index.html" target="_blank" id="link">THE BARBER SHOP</a> ',
        	'cat_id'=>2
        ]);
        Portfolio::create([
        	'image'=>'frontend/img/portfolio/aznews.jpg',
        	'title'=>'<a href="https://intense-plains-31381.herokuapp.com/" target="_blank" id="link">News Website + Admin Panel</a> ',
        	'cat_id'=>1
        ]);
        Portfolio::create([
        	'image'=>'frontend/img/portfolio/json.png',
        	'title'=>'<a href="https://desolate-mesa-33799.herokuapp.com/" target="_blank" id="link">Easy project CRUD with JSON</a> ',
        	'cat_id'=>1
        ]);
        Portfolio::create([
        	'image'=>'frontend/img/portfolio/mola.jpg',
        	'title'=>'<a href="https://glacial-tor-01852.herokuapp.com/" target="_blank" id="link">Molla Ecommerce Web Site</a> ',
        	'cat_id'=>1
        ]);
        Portfolio::create([
        	'image'=>'frontend/img/portfolio/API.png',
        	'title'=>'<a href="https://jbtestapi.herokuapp.com/" target="_blank" id="link">Test API in Laravel</a> ',
        	'cat_id'=>3
        ]);
        Portfolio::create([
        	'image'=>'frontend/img/portfolio/CRUD-Operations.jpg',
        	'title'=>'<a href="https://sheltered-beyond-04043.herokuapp.com/" target="_blank" id="link">Dark Admin Panel</a> ',
        	'cat_id'=>1
        ]);
        Portfolio::create([
        	'image'=>'frontend/img/portfolio/chat.png',
        	'title'=>'<a href="http://lv-chat-jb.herokuapp.com/login" target="_blank" id="link">ONLINE CHAT IN LARAVEL</a> ',
        	'cat_id'=>1
        ]);
        Portfolio::create([
        	'image'=>'frontend/img/portfolio/guessnumber.png',
        	'title'=>'<a href="https://jb-guessmynumber.netlify.app/" target="_blank" id="link">Guess My number</a> ',
        	'cat_id'=>2
        ]);
        Portfolio::create([
        	'image'=>'frontend/img/portfolio/plazabuilding.jpg',
        	'title'=>'<a href="https://plazabuilding.uz/" target="_blank" id="link">PlazaBuilding</a> ',
        	'cat_id'=>1
        ]);
    }
}
