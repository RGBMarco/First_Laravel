@extends('layouts.default')
@section('content')
	<div id="signin" class="col col-4 offset-4">
		<div class="header">
		</div>
		<form role="form">
			<div class="form-group">
				<label for="email">邮箱</label>
				<input class="form-control" name="email" type="text">
			</div>
			<div class="form-group">
				<label for="password">密码</label>
				<input class="form-control" name="password" type="text">
			</div>
			<div id="signin-button">
				<button class="btn btn-primary">登录</button>
			</div>
		</form>
	</div>
@stop
