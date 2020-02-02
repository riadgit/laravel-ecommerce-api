<?php

use App\Modle\Product;
use App\Modle\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Product::class,50)->create();
        factory(Review::class,300)->create();
    }
}