<!DOCTYPE html>
<html>

<head>
    <title>Tambah Tugas</title>
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
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h3>Data Tugas</h3>
                <a href="/tugas"> Kembali</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                <form action="/tugas/store" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        ID Pegawai <input class="form-control" type="number" name="id_pegawai" required="required">
                    </div>
                    <div class="form-group">
                        Tanggal <input class="form-control" type="date" name="tanggal" required="required">
                    </div>
                    <div class="form-group">
                        Nama Tugas <input class="form-control" type="text" name="nama_tugas" required="required"
                            maxlength="50">
                    </div>
                    <div class="form-group">
                        Status <input class="form-control" type="text" name="status" required="required"
                            maxlength="1">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Simpan Data">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
