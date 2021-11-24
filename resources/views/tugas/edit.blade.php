<!DOCTYPE html>
<html>
<head>
	<title>Edit Tugas</title>
</head>
<body>

	<h3>Edit Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->id }}"> <br/>
		ID Pegawai <input type="number" required="required" name="id_pegawai" value="{{ $t->id_pegawai }}"> <br/>
		Tanggal <input type="date" required="required" name="tanggal" value="{{ $t->tanggal }}"> <br/>
		Nama Tugas <input type="text" required="required" name="nama_tugas" maxlength="50" value="{{ $t->nama_tugas }}"> <br/>
		Status <input type="text" required="required" name="status" maxlength="1" value="{{ $t->status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
