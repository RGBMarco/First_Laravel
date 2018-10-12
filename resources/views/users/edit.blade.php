@extends('layouts.default')
@section('content')
	<div id="edit" class="col col-4 offset-4">
		<div class="header">
			<h3>更改资料<h3>
		</div>
		<form role="form">
			<div class="form-group">
				<label for="name">名字</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">邮箱</label>
				<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">密码</label>
				<input type="text" name="password" class="form-control">
			</div>
			<div class="form-group">
				<label for="password-confirmation">确认密码</label>
				<input type="text" name="password-confirmation" class="form-control">
			</div>
			<div id="ensure-button">
				<button class="btn btn-primary">确认修改</button>
			</div>
		</form>
	</div>
@stop
