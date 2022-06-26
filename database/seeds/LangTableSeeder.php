<?php

use Illuminate\Database\Seeder;
use App\Lang;
class LangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lang::create([
            'key'=>'hire_link',
            'en'=>'Contact me',
            'uz'=>'Bog`lanish', 
            'custom'=>'',
        ]);

        Lang::create([
            'key'=>'i_am',
            'en'=>'I Am',
            'uz'=>'Men',

        ]);
        Lang::create([
            'key'=>'about_me',
            'en'=>'ABOUT ME',
            'uz'=> 'Men haqimda'
            ]);
        
        Lang::create([
            'key'=>'skill',
            'en'=>'My Skills.',
            'uz'=>'Mening bilimlarim',
            'custom'=>'',
        ]);

        Lang::create([
            'key'=>'experince',
            'en'=>'My Experience',
            'uz'=>'Mening tajribam',
            'custom'=>'',
        ]);
        
        Lang::create([
            'key'=>'service',
            'en'=>'My Services',
            'uz'=>'Mening xizmatlarim',
            'custom'=>'',
        ]);
        
        Lang::create([
            'key'=>'work',
            'en'=>'My Works',
            'uz'=>'Mening ishlarim',
            'custom'=>'',
        ]);
        
        Lang::create([
            'key'=>'contact',
            'en'=>'Contact Me',
            'uz'=>'Bog`lanish',
            'custom'=>'',
        ]);

        Lang::create([
            'key'=>'subs_email',
            'en'=>'Get The latest Update by Email',
            'uz'=>'Elektron pochta orqali oxirgi yangilanishni oling',
            'custom'=>'',
        ]);

         Lang::create([
            'key'=>'cv',
            'en'=>'Download CV',
            'uz'=>'CVni yuklab oling',
            'custom'=>'',
        ]);
        
         Lang::create([
            'key'=>'phone',
            'en'=>'Call Me',
            'uz'=>'Telefon',
            'custom'=>'',
        ]);

        Lang::create([
            'key'=>'email',
            'en'=>'Email Us At',
            'uz'=>'Elektron pochta',
            'custom'=>'',
        ]);
        Lang::create([
            'key'=>'office',
            'en'=>'Visit Office',
            'uz'=>'Office',
            'custom'=>'',
        ]);

        Lang::create([
            'key'=>'sendmsg',
            'en'=>'Send Message',
            'uz'=>'Xabar yuborish',
            'custom'=>'',
        ]);

        Lang::create([
            'key'=>'subscibe',
            'en'=>'Subscibe',
            'uz'=>'Obuna',
            'custom'=>'',
        ]);
        

    }
}
