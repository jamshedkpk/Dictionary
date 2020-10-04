<?php
namespace Database\Factories;

use App\Models\Word;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class WordFactory extends Factory
{
protected $model = Word::class;
public function definition()
{
return 
[
'word_type_id'=>$this->faker->randomDigit,
'word'=>$this->faker->name,
'meaning'=>$this->faker->name,
'sentence'=>$this->faker->text,
];
}
}
