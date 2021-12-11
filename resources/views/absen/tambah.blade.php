@extends('layout.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'TAMBAH DATA ABSEN')

@section('konten')
    <a href="/absen" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
    <form action="/absen/store" method="post" style="margin-top: 1%;">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="idpegawai">Nama Pegawai:</label>
            <div class='col-sm-6 input-group' id='idpegawai'>
                <span class="input-group-addon">
                    <i class="fas fa-user"></i>
                </span>
                <select class="form-control" name="idpegawai">
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
            <label>Status:</label>
            <br>
            <label class="radio-inline" for="a" style="color: red;"><input type="radio" id="a" name="status" value="A" checked>TIDAK HADIR</label>
            <label class="radio-inline" for="h" style="color: green;"><input type="radio" id="h" name="status" value="H">HADIR</label>
        </div>
        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data</button>
    </form>
@endsection
