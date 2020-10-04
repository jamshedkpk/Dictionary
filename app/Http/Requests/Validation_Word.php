<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class Validation_Word extends FormRequest
{
public function authorize()
{
return true;
}
public function rules()
{
return 
[
'word'=>'required|alpha',
'meaning'=>'required',
'sentence'=>'required',
];
}
public function attributes()
{
return 
[
'word'=>'Word',
'meaning'=>'Meaning',
'sentence'=>'Sentence',
]; 
}
}
