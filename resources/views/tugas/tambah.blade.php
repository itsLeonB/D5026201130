@extends('layout.happy')
@section('title', 'Data Tugas')
@section('judulhalaman', 'TAMBAH DATA TUGAS')

@section('konten')
    <a href="/tugas" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
    <form action="/tugas/store" method="post" style="margin-top: 1%;">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="id_pegawai">Nama Pegawai:</label>
            <div class='col-sm-6 input-group' id='id_pegawai'>
                <span class="input-group-addon">
                    <i class="fas fa-user"></i>
                </span>
                <select class="form-control" name="id_pegawai">
                    @foreach ($pegawai as $p)
                        <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="dtpickerdemo">Tanggal:</label>
            <div class='col-sm-6 input-group date' id='dtpickerdemo'>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
                <input type='text' class="form-control" name="tanggal" required>
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
            <div class='col-sm-6 input-group'>
                <span class="input-group-addon">
                    <i class="fas fa-tasks"></i>
                </span>
                <input class="form-control" type="text" name="nama_tugas" placeholder="Project" required maxlength="50">
            </div>
        </div>
        <div class="form-group">
            <label>Status:</label>
            <br>
            <label class="radio-inline" for="n" style="color: red;"><input type="radio" id="n" name="status" value="N" checked>BELUM
                SELESAI</label>
            <label class="radio-inline" for="y" style="color: green;"><input type="radio" id="y" name="status" value="Y">SELESAI</label>
        </div>
        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data</button>
    </form>
@endsection
