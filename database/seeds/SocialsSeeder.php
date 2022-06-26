<?php

use Illuminate\Database\Seeder;
use App\Social;
class SocialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Social::create([
        	'icon'=>'fab fa-facebook',
        	'link'=>'https://www.facebook.com/jorabeyusupov/'
        ]);
        Social::create([
        	'icon'=>'fab fa-linkedin',
        	'link'=>'https://www.linkedin.com/in/jorabekyusupov'
        ]);
        Social::create([
        	'icon'=>'fab fa-instagram',
        	'link'=>'https://www.instagram.com/jorabek_yusupov/'
        ]);
        // Social::create([
        // 	'icon'=>'fab fa-telegram',
        // 	'link'=>'#'
        // ]);
    }
}
