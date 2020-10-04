<?php
namespace App\Http\Controllers;
use App\Models\Word_type;
use App\Models\Word;
use Illuminate\Http\Request;
use App\Http\Requests\Validation_Word;
class WordController extends Controller
{
public function index()
{
$words=Word::all();
return view('Dashboard.Word.Index',compact('words'));
}
public function create()
{
$word_types=Word_Type::all();
return view('Dashboard.Word.Create',compact('word_types'));
}

public function store(Validation_Word $request)
{
// Taking values from input fields
$word_type_id=$request->word_type_id;
$word=$request->word;
$meaning=$request->meaning;
$sentence=$request->sentence;
// Creating an object of word class and store data in it...
$obj=new Word();
$obj->word_type_id=$word_type_id;
$obj->word=$word;
$obj->meaning=$meaning;
$obj->sentence=$sentence;
$result=$obj->save();
if($result)
{
return redirect()->route('Word.index');	
}
}

public function show($word)
{
$word=Word::find($word);
return view('Dashboard.Word.Show',compact('word'));
}
public function edit($word)
{
$word=Word::find($word);
$word_types=Word_Type::all();
return view('Dashboard.Word.Edit',compact(['word_types','word']));
}
public function update(Validation_Word $request, $word)
{
$obj=Word::find($word);
$obj->word=$request->word;
$obj->meaning=$request->meaning;
$obj->sentence=$request->sentence;
$obj->word_type_id=$request->word_type_id;
$result=$obj->update();
if($result)
{
return redirect()->route('Word.index');	
}
}
public function destroy($word)
{
$obj=Word::find($word);
$result=$obj->delete();
if($result)
{
return redirect()->route('Word.index');	
}
}
}
