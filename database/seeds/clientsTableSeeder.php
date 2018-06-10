<?php

use Illuminate\Database\Seeder;
use App\client;
class clientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\client::class,20)->create();   
         }
}
