<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = Category::pluck('id')->toArray();
        $supplier = Supplier::pluck('id')->toArray();
        return [
            'product_code' => $this->faker-> numberBetween($min=111111,$max=999999),
            'name' => $this->faker->name,
            'details' => $this->faker->text($maxNbChars=200),
            'buying_price' =>  $this->faker-> numberBetween($min=500,$max=2000),
            'selling_price' =>  $this->faker-> numberBetween($min=2000,$max=3500),
            'stock' => $this->faker->randomDigit,
            'category_id' => $this->faker->randomElement($categories),
            'supplier_id' => $this->faker->randomElement($supplier),
            'buying_date' => $this->faker->dateTimeThisMonth($max = 'now', $timezone = null),
            'sort_order' => $this->faker->randomDigit,
            'status' => True,
            
        ];
    }
}
