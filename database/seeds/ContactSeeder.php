<?php

use Illuminate\Database\Seeder;
use App\Contact;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
        	'phone'=>'+998998118787',
        	'email'=>'J.A.Y@list.ru',
        	'address'=>'Uzbekistan, Tashkent city, Lutfiy street',
        ]);
    }
}
