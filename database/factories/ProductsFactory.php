<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $rand_num = random_int(1,40);
        return [
            'name'=>'product'. $rand_num,
            'description'=>'this is describe for product '. $rand_num,
            'image' =>"",
            'category_id'=>$this->getRandomCategory()
        ];
    }
    public function getRandomCategory(){
        $data = Category::get();
        $arr = [];
        foreach($data as $item){
            array_push($arr,$item->id);
        }
        $key = array_rand($arr);
        return $arr[$key];

    }
}
