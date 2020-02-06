<html>
<head>
	<title>
		@yield('title')
	</title>
	<body>
		@include('layouts.header')
		<div align="center">
			@yield('content')
		</div>
		@include('layouts.footer')
	</body>
</head>
</html>