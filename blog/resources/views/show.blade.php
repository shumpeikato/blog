@extends('layout')
@section('content')

<h1>詳細画面</h1>
<p>ブログ名前 ：{{ $blog->name }}</p>
<p>ブログ内容 ：{{ $blog->contents }}</p>


<div class="comment-area">
    ◼コメントエリア
<form method="post" action="{{ url("comment",$blog->id) }}">
<!--    {!! csrf_field() !!}-->
    <p><input type="text" name="name" placeholder="name"></p>
    <p><textarea name="comment" placeholder="text"></textarea></p>
    <input type="submit">
</form>
</div>

@foreach((array)($blog->comments) as $comment)
@if(  $comment->permission === 1)
    {{ $comment->name }}
    {{ $comment->comment }}
@endif
@endforeach

@stop