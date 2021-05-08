<!DOCTYPE html>
<html>
<head>
	<title>Tabel Negara</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h3>Data Negara</h3>
 
	<a href="/negara/add" class="btn btn-primary"> Input</a>
	
	<br/>
	<br/>
	
	<table class="table table-striped">
		<tr>
		<thead class="table-dark">
			<th>Kode</th>
            <th>Kode Negara</th>
			<th>Nama</th>
			<th>Kode Telepon</th>
			<th>Mata Uang</th>
			<th>Aksi</th>
		</thead>
		</tr>
		@foreach($negara as $n)
		<tr>
			<td>{{ $n->kode }}</td>
			<td>{{ $n->kode_iso3 }}</td>
			<td>{{ $n->nama }}</td>
			<td>{{ $n->kode_telepon }}</td>
			<td>{{ $n->mata_uang }}</td>
			<td>
				<a href="/negara/edit/{{ $n->id }}" class="btn btn-success">Edit</a>
				|
				<a href="/negara/delete/{{ $n->id }}" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
	</div>
 
</body>
</html>