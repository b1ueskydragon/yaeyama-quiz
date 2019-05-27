@extends('layouts.authenticated')

@section('title','パスワード変更')

@section('content')

<form method="POST" action="{{ url('mypage') }}" class="form">
  @csrf

  <div class="form-heading">
    <h1>パスワード変更</h1>
    <p>登録しているパスワードを変更します。</p>
  </div>

  <div class="form-group">
    <input type="password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" name="old_password" placeholder="現在のパスワード(6文字)">
    @if($errors->has('old_password'))
    <span class="error_msg">{{ $errors->first('old_password') }}</span>
    @endif
  </div>
  <div class="form-group">
    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="新しいパスワード(6文字)">
    @if($errors->has('password'))
    <span class="error_msg">{{ $errors->first('password') }}</span>
    @endif
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="password_confirmation" placeholder="(確認)新しいパスワード(6文字)">
  </div>
  <button type="submit" class="btn btn-default btn-large">変更</button>

  <a href="/" class="form-back_message">TOPへ　→</a>
</form>
@endsection