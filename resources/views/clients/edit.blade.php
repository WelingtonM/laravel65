<!DOCTYPE html>
<html>
<head>
	<title>Edit Client</title>
</head>
<body>
	<form method="post" action="{{ "/clients/{$client->id}/update" }}">
		{!! csrf_field() !!}
		<label for="name">Name</label>
		<input type="text" name="name" id="name" value="{{$client->name}}"><br>
		<label for="email">E-mail</label>
		<input type="email" name="email" id="email" value="{{$client->email}}"><br>	
		<button type="submit">Update</button>
	</form>
</body>
</html>