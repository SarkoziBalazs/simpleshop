<?php

namespace Database\Factories;

use App\Models\ProductPicture;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductPictureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductPicture::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $color = str_replace("#", "",$this->faker->hexColor);
        $text = join(" ",$this->faker->words());

        return [
            "url" => "/placeholder.php?size=640x480&bg=$color&text=$text",
        ];
    }
}
