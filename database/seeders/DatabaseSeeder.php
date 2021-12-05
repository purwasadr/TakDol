<?php

namespace Database\Seeders;

use App\Models\Product;
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
        \App\Models\User::factory(5)->create();

        Product::create([
            'title' => 'Sepatu',
            'price' => '400000',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos nemo aut perspiciatis ad repellat tempora nisi doloremque veniam minus, nam consectetur quam magni illum. Ullam quod dolorum nesciunt culpa cum?',
            'image' => null,
            'user_id' => 1
        ]);

        Product::create([
            'title' => 'Hp Kotak Urip',
            'price' => '24000000',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos nemo aut perspiciatis ad repellat tempora nisi doloremque veniam minus, nam consectetur quam magni illum. Ullam quod dolorum nesciunt culpa cum?',
            'image' => null,
            'user_id' => 1
        ]);

        Product::create([
            'title' => 'Intel 1300K',
            'price' => '11400000',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos nemo aut perspiciatis ad repellat tempora nisi doloremque veniam minus, nam consectetur quam magni illum. Ullam quod dolorum nesciunt culpa cum?',
            'image' => null,
            'user_id' => 1
        ]);

        // Product::factory(15)->create();
    }
}
