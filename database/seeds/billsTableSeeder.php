<?php

use Illuminate\Database\Seeder;
use App\bill;
class billsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\bill::class,20)->create();    }
}
