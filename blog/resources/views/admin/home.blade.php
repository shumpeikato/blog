@extends('layout')
@section('content')

<h1>アドミン画面</h1>
<p class="new-create"><a href="{{ url('admin/create') }}">新規作成画面へ</a></p>
@foreach($blogs as $blog)
<div class="blog-block">
 <h2 class="title">{{ $blog->name }}</h2>
 <p class="contents"> {{$blog->contents}}</p>
 <ul>
     <li><a href="{{url('admin/edit', $blog->id)}}">編集画面へ</a></li>
     <li>
        {!! Form::open(['url' => "admin/delete/$blog->id"]) !!}
        <button type="submit">削除する</button>
        {!! Form::close() !!}
     </li>
 </ul>
</div>
@endforeach


@stop