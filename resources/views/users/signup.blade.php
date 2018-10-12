@extends('layouts.default')
@section('content')
<div id="signup" class="col col-4 offset-4">
	<div class="header">
	</div>
	<form role="form">
		<div class="form-group">
			<label for="name">名字</label>
			<input name="name" class="form-control" type="text">
		</div>
		<div class="form-group">
			<label for="email">邮箱</label>
			<input name="email" class="form-control" type="text">
		</div>
		<div class="form-group">
			<label for="password">密码</label>
			<input name="password" class="form-control" type="password">
		</div>
		<div class="form-group">
			<label for="password-confirmation">确认密码</label>
			<input name="password-confirmation" class="form-control" type="password">
		</div>
		<div class="signin-hint">
			<p>已有帐号? &gt; &gt;<a href="{{ route('signup')}}">登录</a></p>
		</div>
		<div id="signup-button" class="form-group">
			<button class="btn btn-info">注册</button>
		</div>
	</form>
</div>
@stop
