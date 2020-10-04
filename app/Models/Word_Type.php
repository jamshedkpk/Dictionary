<?php
namespace App\Models;
use App\Models\Word;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word_Type extends Model
{
    use HasFactory;
    public $primaryKey="word_type_id";
    protected $guards=[];
    public $timestamps=false;

public function words()
{
return $this->hasMany(Word::class,'word_type_id');	
}
}
