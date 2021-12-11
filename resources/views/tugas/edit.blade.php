@extends('layout.happy')
@section('title', 'Data Tugas')
@section('judulhalaman', 'EDIT DATA TUGAS')

@section('konten')
    <a href="/tugas" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
    @foreach ($tugas as $t)
        <form action="/tugas/update" method="post" style="margin-top: 1%;">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $t->id }}">
            <div class="form-group">
                <label for="nama">Nama Pegawai:</label>
                <div class='col-sm-6 input-group' id='id_pegawai'>
                    <span class="input-group-addon">
                        <i class="fas fa-user"></i>
                    </span>
                    <select class="form-control" name="id_pegawai">
                        @foreach ($pegawai as $p)
                            <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $t->id_pegawai) selected="selected" @endif>
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
                    <input type='text' class="form-control" name="tanggal" required value="{{ $t->tanggal }}">
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
                    <input class="form-control" type="text" required="required" name="nama_tugas" maxlength="50"
                        value="{{ $t->nama_tugas }}">
                </div>
            </div>
            <div class="form-group">
                <label>Status:</label>
                <br>
                <label class="radio-inline" for="n" style="color: red;"><input type="radio" id="n" name="status" value="N"
                        @if ($t->status === 'N') checked @endif>BELUM
                    SELESAI</label>
                <label class="radio-inline" for="y" style="color: green;"><input type="radio" id="y" name="status" value="Y"
                        @if ($t->status === 'Y') checked @endif>SELESAI</label>
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data</button>
        </form>
    @endforeach
@endsection
