<?php

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Asli Alam', 'Batu-batuan', 'Kayu', 'Keramik', 'Logam', 'Serat', 'Tekstil'];
        foreach ($categories as $category) {
            ProductCategory::create([
                'name' => $category,
                'user_id' => 1
            ]);
        }
    }
}
