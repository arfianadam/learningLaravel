<html>
<head>
	<meta charset="UTF-8">
	<title>My New Laravel Blog</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<h1>My New Laravel Blog</h1>
		@yield('submenu')
	</div>

	@yield('content')
	
	<script src="//cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>
	<script type="text/javascript">
		CKEDITOR.replace( 'content' );
	</script>
</body>
</html>