<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Required for DB facade
use App\Models\Product; // Required for Product model

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Pixel 8 Pro',
            'description' => 'The latest Google Pixel phone with advanced AI features and camera.',
            'price' => 999.00,
            'image' => 'https://example.com/images/pixel8pro.jpg',
        ]);

        Product::create([
            'name' => 'Galaxy S24 Ultra',
            'description' => 'Samsung\'s flagship phone with S Pen and top-tier specifications.',
            'price' => 1199.00,
            'image' => 'https://example.com/images/galaxys24ultra.jpg',
        ]);

        Product::create([
            'name' => 'iPhone 15 Pro',
            'description' => 'Apple\'s premium offering with the A17 Bionic chip and Pro camera system.',
            'price' => 1099.00,
            'image' => 'https://example.com/images/iphone15pro.jpg',
        ]);

        Product::create([
            'name' => 'OnePlus 12',
            'description' => 'A flagship killer with great performance and fast charging.',
            'price' => 799.00,
            'image' => 'https://example.com/images/oneplus12.jpg',
        ]);
    }
}
