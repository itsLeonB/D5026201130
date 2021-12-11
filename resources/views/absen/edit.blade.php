@extends('layout.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'EDIT DATA ABSEN')

@section('konten')
    <a href="/absen" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
    @foreach ($absen as $a)
        <form action="/absen/update" method="post" style="margin-top: 1%;">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $a->ID }}">
            <div class="form-group">
                <label for="nama">Nama Pegawai:</label>
                <div class='col-sm-6 input-group' id='idpegawai'>
                    <span class="input-group-addon">
                        <i class="fas fa-user"></i>
                    </span>
                    <select class="form-control" name="idpegawai">
                        @foreach ($pegawai as $p)
                            <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai) selected="selected" @endif>
                                {{ $p->pegawai_nama }}</option>
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
                    <input type='text' class="form-control" name="tanggal" required value="{{ $a->Tanggal }}">
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
                <label class="radio-inline" for="h" style="color: red;"><input type="radio" id="a" name="status" value="A"
                        @if ($a->Status === 'A') checked @endif>TIDAK HADIR</label>
                <label class="radio-inline" for="a" style="color: green;"><input type="radio" id="h" name="status" value="H"
                        @if ($a->Status === 'H') checked @endif>HADIR</label>
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data</button>
        </form>
    @endforeach
@endsection
