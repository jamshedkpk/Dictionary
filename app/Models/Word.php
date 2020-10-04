<?php
namespace App\Models;
use App\Models\Word_Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;
    public $primaryKey="word_id";
    protected $guards=[];
    public $timestamps=false;

public function type()
{
return $this->belongsTo(Word_Type::class,'word_type_id');	
}
}
