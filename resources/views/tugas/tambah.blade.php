<!DOCTYPE html>
<html>
<head>
	<title>Tambah Tugas</title>
</head>
<body>

	<h3>Data Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		ID Pegawai <input type="number" name="id_pegawai" required="required"> <br/>
		Tanggal <input type="date" name="tanggal" required="required"> <br/>
		Nama Tugas <input type="text" name="nama_tugas" required="required" maxlength="50"> <br/>
		Status <input type="text" name="status" required="required" maxlength="1"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
