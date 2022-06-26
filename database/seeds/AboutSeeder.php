<?php

use Illuminate\Database\Seeder;
use App\About;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
        	'description'=>'My name is Jo`rabek Yusupov, I am web developer from Tashkent, Uzbekistan. I have rich experience in web site design and building and customization, also I am good at Laravel.',
        	'cv'=>'https://dl.uploadgram.me/6249472f7639ch?raw',
        	'image'=>'frontend/img/about/0E8A5005.jpg'
        ]);
    }
}
