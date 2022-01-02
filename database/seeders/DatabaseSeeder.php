<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
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

        User::create([
            'name' => 'Arturia Pendragon',
            'username' => 'arturia_pendragon',
            'store_name' => 'Pedang Jaya',
            'email' => 'arturiapendragon@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ]);

        User::create([
            'name' => 'Arthur Kingsley',
            'username' => 'artur_kingsley',
            'store_name' => 'Kreasi Armor',
            'email' => 'arthurkingsley@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ]);

        Category::create([
            'name' => 'Shoes',
            'slug' => 'shoes'
        ]);

        Category::create([
            'name' => 'Electronic',
            'slug' => 'electronic'
        ]);

        Category::create([
            'name' => 'Clothes',
            'slug' => 'clothes'
        ]);


        Product::create([
            'title' => 'Sepatu',
            'slug' => 'sepatu',
            'price' => '400000',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos nemo aut perspiciatis ad repellat tempora nisi doloremque veniam minus, nam consectetur quam magni illum. Ullam quod dolorum nesciunt culpa cum?',
            'image' => 'img_products/dummy-shoes.jpg',
            'user_id' => 1,
            'category_id' => 1
        ]);

        Product::create([
            'title' => 'Iphone 11',
            'slug' => 'Iphone-11',
            'price' => '24000000',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos nemo aut perspiciatis ad repellat tempora nisi doloremque veniam minus, nam consectetur quam magni illum. Ullam quod dolorum nesciunt culpa cum?',
            'image' => 'img_products/dummy-iphone-11.jpg',
            'user_id' => 6,
            'category_id' => 2
        ]);

        Product::create([
            'title' => 'Intel i5',
            'slug' => 'intel-i5',
            'price' => '11400000',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos nemo aut perspiciatis ad repellat tempora nisi doloremque veniam minus, nam consectetur quam magni illum. Ullam quod dolorum nesciunt culpa cum?',
            'image' => 'img_products/dummy-intel-i5.jpg',
            'user_id' => 6,
            'category_id' => 2
        ]);

        // Product::factory(15)->create();
    }
}
