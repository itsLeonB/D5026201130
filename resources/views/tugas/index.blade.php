<!DOCTYPE html>
<html>
<head>
	<title>Tugas</title>
</head>
<body>

	<h2>Tugas</h2>

	<a href="/tugas/tambah"> + Tambah tugas baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Nama Tugas</th>
			<th>Status</th>
            <th>Opsi</th>
		</tr>
		@foreach($tugas as $t)
		<tr>
			<td>{{ $t->id_pegawai }}</td>
			<td>{{ $t->tanggal }}</td>
			<td>{{ $t->nama_tugas }}</td>
			<td>{{ $t->status }}</td>
			<td>
				<a href="/tugas/edit/{{ $t->id }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $t->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
