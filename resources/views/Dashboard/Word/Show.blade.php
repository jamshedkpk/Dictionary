@extends('Dashboard.Layout.Layout')
@section('show_word')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 offset-1">
<a href="{{route('Word.index')}}" class="btn btn-success float-right" style="margin-top:10px;margin-bottom:10px;">
Homepage	
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
</tr>
</thead>
<tbody>
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
</tr>
</tbody>
</table>
</div>	
</div>
</div>
@endsection