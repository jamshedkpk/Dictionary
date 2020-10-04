@extends('Dashboard.Layout.Layout')
@section('edit_word')
<form action="{{route('Word.update',$word->word_id)}}" method="post">
@csrf
@method('PUT')
<div class="container-fluid" style="padding: 40px;">
<div class="row">
<div class="col-md-4">
<div class="form-group">
<label>Catagory Of Word :</label>
<select type="text" name="word_type_id" value="{{old('word_type')}}" class="form-control">
@foreach($word_types as $type)
<option value="{{$type->word_type_id}}">
{{$type->type}}	
</option>
@endforeach
</select>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Word :</label>
<input type="text" name="word" value="{{$word->word}}" class="form-control">
<strong class="text-danger">
@if($errors->has('word'))
@foreach($errors->get('word') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label>Meaning :</label>
<input type="text" name="meaning" value="{{$word->meaning}}" class="form-control">
<strong class="text-danger">
@if($errors->has('meaning'))
@foreach($errors->get('meaning') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>
</div>	
</div>
<div class="row">
<div class="col-md-12">
<textarea name="sentence" class="form-control" row="30" col="30">
{{$word->sentence}}
</textarea>
<strong class="text-danger">
@if($errors->has('sentence'))
@foreach($errors->get('sentence') as $error)
{{$error}}
@endforeach
@endif
</strong>
</div>
</div>
<br>
<div class="row">
<div class="col-md-12">
<button class="btn btn-success btn-block">Update Word</button>	
</div>
</div>
</div>
</form>
@endsection
