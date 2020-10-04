@include('Dashboard.Layout.Header')
<div class="content-wrapper">
@yield('index_word')
@yield('create_word')	
@yield('show_word')
@yield('edit_word')
</div>
@include('Dashboard.Layout.Footer')
