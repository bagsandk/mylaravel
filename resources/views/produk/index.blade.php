<!DOCTYPE>
<html>
<head>
	<title>Produk</title>
</head>
<body>
	<h1>Data Produk</h1>
		<table border="1">
			<thead>
				<tr>
				</tr>
			</thead>
			<tbody>
				<th>No</th>
				<th>Nama Produk</th>
				@foreach ($produk as $i => $v)
				<tr>
					<td>{{ $i+1 }}</td>
					<td>{{ $v }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
</body>
</html>