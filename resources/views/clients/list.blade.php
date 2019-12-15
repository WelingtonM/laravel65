<!DOCTYPE html>
<html>
<head>
	<title>Client List</title>
</head>
<body>
	@csrf
	<h1>Client List</h1>
	<a href="/clients/create">New Client</a>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>E-mail</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($clients as $client)
			<tr>
				<td>{{$client->id}}</td>
				<td>{{$client->name}}</td>
				<td>{{$client->email}}</td>
				<td>
					<a href="/clients/{{$client->id}}/edit">Edit</a> |
					<a href="/clients/{{$client->id}}/delete">Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>