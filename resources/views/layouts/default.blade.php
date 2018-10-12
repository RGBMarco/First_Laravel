<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title','Marco')</title>
		<link rel="stylesheet" href="/css/app.css"></link>
	</head>
	<body>
		@include('layouts._header')
		@section('content')
		<div id="default" class="col col-8 offset-2">
			<div class="jumbotron">
				<div class="container">
						<h1>Hello,Laravel</h1>
						<p>一切从这里开始,</p>
						<div>
							<a class="bg-primary" href="{{ route('signup') }}">现在注册</a>
						</div>
				</div>
			</div>
		</div>
		@show
		@include('layouts._footer')
	</body>
</html>
