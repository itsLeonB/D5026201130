@extends('layout.happy')
@section('title', 'Data Tugas')
@section('judulhalaman', 'TAMBAH DATA TUGAS')

@section('konten')
    <a href="/tugas" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
    <form action="/tugas/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="id_pegawai">ID Pegawai:</label>
            <input class="form-control" type="number" name="id_pegawai" placeholder="007" required>
        </div>
        <div class="form-group">
            <label for="dtpickerdemo" class="control-label">Tanggal:</label>
            <div class='input-group date' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" required>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        <script type="text/javascript">
            $(function() {
                $('#dtpickerdemo').datetimepicker({
                    format: "YYYY-MM-DD hh:mm:ss",
                    "defaultDate": new Date(),
                    locale: "id"
                });
            });
        </script>
        <div class="form-group">
            <label for="nama_tugas">Nama Tugas:</label>
            <input class="form-control" type="text" name="nama_tugas" placeholder="Project" required maxlength="50">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input class="form-control" type="text" name="status" placeholder="N" required maxlength="1">
        </div>
        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data</button>
    </form>
@endsection
