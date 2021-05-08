<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductDescription;
use App\Models\ProductPicture;
use App\Models\ProductReview;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::factory()
            ->times(100)
            ->create()
            ->each(function ($product){
                $description = ProductDescription::factory()->make();
                $product->description()->save($description);

                $images = ProductPicture::factory()->count(5)->make();
                $product->pictures()->saveMany($images);

                $reviews = ProductReview::factory()->count(3)->make();
                $product->reviews()->saveMany($reviews);

                $category = Category::whereNotNull("parent_id")->pluck("id")->random();
                ProductCategory::factory()->create(
                    ["product_id" => $product->id,"category_id" => $category]
                );
            });
    }
}
