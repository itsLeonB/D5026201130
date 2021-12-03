@extends('layout.happy')
@section('title', 'Data Tugas')
@section('judulhalaman', 'EDIT DATA TUGAS')

@section('konten')
    <a href="/tugas" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
    @foreach ($tugas as $t)
        <form action="/tugas/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $t->id }}">
            <div class="form-group">
                <label for="id_pegawai">ID Pegawai:</label>
                <input class="form-control" type="number" required="required" name="id_pegawai"
                    value="{{ $t->id_pegawai }}">
            </div>
            <div class="form-group">
                <label for="dtpickerdemo" class="control-label">Tanggal:</label>
                <div class='input-group date' id='dtpickerdemo'>
                    <input type='text' class="form-control" name="tanggal" required value="{{ $t->tanggal }}">
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
                <input class="form-control" type="text" required="required" name="nama_tugas" maxlength="50"
                    value="{{ $t->nama_tugas }}">
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input class="form-control" type="text" required="required" name="status" maxlength="1"
                    value="{{ $t->status }}">
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data</button>
        </form>
    @endforeach
@endsection
