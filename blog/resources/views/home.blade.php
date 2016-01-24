@extends('layout')
@section('content')

	<h1>ホーム画面</h1>
	<div class="container">	
		@foreach($blogs as $blog)
                <div class="blog-list">
		<h3>{{$blog->name}}</h3>
		<p>{{$blog->contents}}</p>
		<p><a href="{{ url('show', $blog->id) }}">もっとみる</a></p>
                </div>
		@endforeach
	</div>
	
@stop