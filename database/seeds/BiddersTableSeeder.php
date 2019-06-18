<?php

use App\Bidder;
use Illuminate\Database\Seeder;

class BiddersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bidder::create(['name' => 'Hikaa']);
        Bidder::create(['name' => 'LinkServe']);
        Bidder::create(['name' => 'RoseWare']);
        Bidder::create(['name' => 'BuilDraw']);
    }
}
