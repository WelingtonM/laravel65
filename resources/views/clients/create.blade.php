<!DOCTYPE html>
<html>
<head>
	<title>Create Client</title>
</head>
<body>
	<form method="post" action="/clients/store">
		{!! csrf_field() !!}
		<label for="name">Name</label>
		<input type="text" name="name" id="name"><br>
		<label for="email">E-mail</label>
		<input type="email" name="email" id="email"><br>	
		<button type="submit">Submit</button>
	</form>
</body>
</html>