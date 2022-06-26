<?php

use Illuminate\Database\Seeder;
use App\Exeperince;
class ExpericeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exeperince::create([
        	'title'=>'Ongila LLC:Backend Developer',
        	'date'=>'2021 / 2022',
        	'icon'=>'fas fa-code',
        	'description'=>'I have participated in several interesting projects at Ongila LLC and met many friends and I am very happy to work there',
        ]);

         Exeperince::create([
        	'title'=>'Unitec School:Full Stack Mentor',
        	'date'=>'2021 / 2022',
        	'icon'=>'fab fa-screen-users',
        	'description'=>'At Unitec School, I taught students frontend and backend programming. We did a lot of fun projects with the students.',
        ]);

          Exeperince::create([
        	'title'=>'Olcha.uz:Backend Developer',
        	'date'=>'2022 / 20xx',
        	'icon'=>'fas fa-code',
        	'description'=>'I am currently working as a backend programmer at Olcha.uz. We create conveniences for people there. our goal is to bring sellers in our country into one system. We will definitely reach our goal!',
        ]);

        //    Exeperince::create([
        // 	'title'=>'Php Programming',
        // 	'date'=>'2004 / 2008',
        // 	'icon'=>'fab fa-twitter',
        // 	'description'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...',
        // ]);

        //     Exeperince::create([
        // 	'title'=>'UI/UX Design',
        // 	'date'=>'2014 / 2015',
        // 	'icon'=>'fab fa-twitter',
        // 	'description'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...',
        // ]);

        //      Exeperince::create([
        // 	'title'=>'Web Designer',
        // 	'date'=>'2018 / 2020',
        // 	'icon'=>'fab fa-twitter',
        // 	'description'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...',
        // ]);
    }
}
