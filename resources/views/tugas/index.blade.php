<!DOCTYPE html>
<html>

<head>
    <title>Tugas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            padding: 3%;
        }

    </style>
</head>

<body>
    <a href="/">Home</a>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h2>Tugas</h2>
                <a href="/tugas/tambah"> + Tambah tugas baru</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                <table class="table table-bordered table-striped table-hover table-responsive-sm">
                    <tr>
                        <th>ID Pegawai</th>
                        <th>Tanggal</th>
                        <th>Nama Tugas</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                    @foreach ($tugas as $t)
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
            </div>
        </div>

    </div>
</body>

</html>
