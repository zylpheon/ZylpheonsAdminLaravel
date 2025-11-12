<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Order;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Categories
        $categories = [
            ['name' => 'T-Shirts', 'description' => 'Comfortable everyday t-shirts', 'product_count' => 3],
            ['name' => 'Shirts', 'description' => 'Formal and casual shirts', 'product_count' => 2],
            ['name' => 'Hoodies', 'description' => 'Warm and stylish hoodies', 'product_count' => 2],
            ['name' => 'Jackets', 'description' => 'Premium jackets for all seasons', 'product_count' => 2],
            ['name' => 'Pants', 'description' => 'Comfortable and stylish pants', 'product_count' => 3],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        // Customers
        $customers = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '+1 234 567 8900',
                'address' => '123 Main St, New York, NY 10001',
                'total_orders' => 15,
                'total_spent' => 1247.85,
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'phone' => '+1 234 567 8901',
                'address' => '456 Oak Ave, Los Angeles, CA 90001',
                'total_orders' => 8,
                'total_spent' => 624.52,
            ],
            [
                'name' => 'Mike Johnson',
                'email' => 'mike@example.com',
                'phone' => '+1 234 567 8902',
                'address' => '789 Pine Rd, Chicago, IL 60601',
                'total_orders' => 12,
                'total_spent' => 983.28,
            ],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }

        // Products
        $products = [
            [
                'name' => 'Classic Tee',
                'category_id' => 1,
                'price' => 29.99,
                'description' => 'A timeless essential crafted from premium cotton blend.',
                'material' => '100% Premium Cotton',
                'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
                'features' => ['Breathable fabric', 'Pre-shrunk', 'Double-stitched seams'],
                'stock' => 15,
                'color' => ['Black', 'White'],
                'image' => ['url1', 'url2', 'url3'],
            ],
            [
                'name' => 'Casual Button Shirt',
                'category_id' => 2,
                'price' => 49.99,
                'description' => 'Sophisticated casual shirt with modern slim fit.',
                'material' => 'Cotton Blend with Stretch',
                'sizes' => ['S', 'M', 'L', 'XL'],
                'features' => ['Wrinkle-resistant', 'Moisture-wicking', 'Button-down collar'],
                'stock' => 13,
                'color' => ['Blue', 'Gray'],
                'image' => ['url1', 'url2', 'url3'],
            ],
            [
                'name' => 'Premium Hoodie',
                'category_id' => 3,
                'price' => 69.99,
                'description' => 'Luxuriously soft hoodie with heavyweight fleece interior.',
                'material' => '80% Cotton, 20% Polyester',
                'sizes' => ['M', 'L', 'XL', 'XXL'],
                'features' => ['Fleece-lined', 'Kangaroo pocket', 'Adjustable drawstring'],
                'stock' => 10,
                'color' => ['Navy', 'Burgundy'],
                'image' => ['url1', 'url2', 'url3'],
            ],
            [
                'name' => 'Denim Jacket',
                'category_id' => 4,
                'price' => 89.99,
                'description' => 'Classic denim jacket with modern refinements.',
                'material' => '100% Premium Denim',
                'sizes' => ['S', 'M', 'L', 'XL'],
                'features' => ['Fade-resistant', 'Button closure', 'Multiple pockets'],
                'stock' => 8,
                'color' => ['Light Blue', 'Dark Blue'],
                'image' => ['url1', 'url2', 'url3'],
            ],
            [
                'name' => 'Cargo Pants',
                'category_id' => 5,
                'price' => 59.99,
                'description' => 'Functional cargo pants with modern tailored fit.',
                'material' => 'Cotton Canvas',
                'sizes' => ['30', '32', '34', '36', '38'],
                'features' => ['Multiple pockets', 'Reinforced knees', 'Belt loops'],
                'stock' => 7,
                'color' => ['Khaki', 'Olive'],
                'image' => ['url1', 'url2', 'url3'],
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        // Orders
        $orders = [
            [
                'order_number' => '#ORD-1847',
                'customer_id' => 1,
                'product_id' => 3,
                'amount' => 5,
                'total' => 349.95, // Will be auto-calculated
                'status' => 'Completed',
            ],
            [
                'order_number' => '#ORD-1846',
                'customer_id' => 2,
                'product_id' => 4,
                'amount' => 5,
                'total' => 449.95, // Will be auto-calculated
                'status' => 'Processing',
            ],
            [
                'order_number' => '#ORD-1845',
                'customer_id' => 3,
                'product_id' => 5,
                'amount' => 5,
                'total' => 299.95, // Will be auto-calculated
                'status' => 'Shipped',
            ],
        ];

        foreach ($orders as $order) {
            Order::create($order);
        }
    }
}
