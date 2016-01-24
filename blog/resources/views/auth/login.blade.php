@extends('layout')
@section('content')

<!-- resources/views/auth/login.blade.php -->

<form method="post" action= {{url('auth/login')}}>
    {!! csrf_field() !!}

    <!--
<div>
        ユーザー名
        <input type="text" name="name" value="{{ old('name') }}">
    </div>
-->
        	
    <div>
        メールアドレス
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        パスワード
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> ログインを継続する
    </div>

    <div>
        <button type="submit">ログイン</button>
    </div>
</form>

@stop