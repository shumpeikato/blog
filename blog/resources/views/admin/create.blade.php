@extends('layout')
@section('content')
<h1>新規作成画面</h1>
<h2>新規作成画面へようこそ。</h2>	
{!! Form::open(['url' => 'admin/create', 'method' => 'post']) !!}
<p>タイトル：{!! Form::text('name', null, ['placeholder' => 'name'])!!}</p>
<p>内容：{!! Form::textarea('contents', null, ['placeholder' => 'contents'])!!}</p>
<p>{!! Form::submit('Add Blog') !!}</p>
{!! Form::close() !!}
@stop