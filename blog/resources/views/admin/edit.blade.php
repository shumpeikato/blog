@extends('layout')
@section('content')

<h1>編集画面</h1>
{!! Form::open(['url' => "admin/update/$blog->id", 'method' => 'patch']) !!}
    {!! csrf_field() !!}
<p>タイトル：{!! Form::text('name', $blog->name, ['placeholder' => 'name'])!!}</p>
<p>内容：{!! Form::textarea('contents', $blog->contents, ['placeholder' => 'contents'])!!}</p>
<p>{!! Form::submit('Edit Blog') !!}</p>
{!! Form::close() !!}

@stop