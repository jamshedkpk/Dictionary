<?php
namespace Database\Factories;
use App\Models\Word_Type;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class Word_TypeFactory extends Factory
{
protected $model = Word_Type::class;
public function definition()
{
return 
[
'type'=>$this->faker->name,
];
}
}
