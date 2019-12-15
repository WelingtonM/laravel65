<!DOCTYPE html>
<html>
<head>
	<title>Client List</title>
</head>
<body>
	@csrf
	<h1>Client List</h1>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>E-mail</th>
			</tr>
		</thead>
		<tbody>
			@foreach($clients as $client)
			<tr>
				<td>{{$client->id}}</td>
				<td>{{$client->name}}</td>
				<td>{{$client->email}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>