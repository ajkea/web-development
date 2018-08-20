<?php

use Illuminate\Database\Seeder;

class AuctionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Auction::class, 20)->create()->each(function ($u) {
            $u->user()->save(factory(App\Auction::class)->make());
        });

    }
}
