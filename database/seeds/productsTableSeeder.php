<?php

use Illuminate\Database\Seeder;
use App\product;
class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\product::class,50)->create();    
    }
}
