<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Models\Link::class,5)->create();
        \App\Models\Link::factory(5)->create();
    }
}
