@extends('Dashboard.Layout.Layout')
@section('index_word')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 offset-1">
<a href="{{route('Word.create')}}" class="btn btn-success float-right" style="margin-top:10px;margin-bottom:10px;">
Add New Word	
</a>
<br>
<table class="table table-bordered table-hover table-striped">
<thead><tr>
<th>
Word
</th>
<th>
Type
</th>
<th>
Meaning	
</th>
<th>
Sentence
</th>
<th>
Search
</th>
<th>
Edit
</th>
<th>
Delete
</th>
</tr>
</thead>
<tbody>
@foreach($words as $word)
<tr>
<td>
{{$word->word}}	
</td>
<td>
{{$word->type->type}}
</td>	
<td>
{{$word->meaning}}
</td>
<td>{{$word->sentence}}</td>
<td>
<a href="{{route('Word.show',$word->word_id)}}" class="btn btn-link btn btn-light"><span class="fa fa-search" ></span></a>
</td>
<td>
<a href="{{route('Word.edit',$word->word_id)}}" class="btn btn-link btn btn-light"><span class="fa fa-edit" ></span></a>
</td>
<td>
<form method="post" action="{{route('Word.destroy',$word->word_id)}}">
@csrf
@method('delete')	
<button class="btn btn-link btn btn-light"><span class="fa fa-trash" ></span></button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>	
</div>
</div>
@endsection