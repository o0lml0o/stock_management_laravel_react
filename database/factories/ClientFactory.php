<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name=$this->faker->firstName();
        $last_name=$this->faker->lastName();
        $phone=$this->faker->phoneNumber();
        $address=$this->faker->streetAddress();
        return [
            'name'=>$name,
            'last_name'=>$last_name,
            'phone'=>$phone,
            'address'=>$address
        ];
    }
}
