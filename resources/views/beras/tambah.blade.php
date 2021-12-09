@extends('layout.happy')
@section('title', 'Data Beras')
@section('judulhalaman', 'TAMBAH DATA BERAS')

@section('konten')
    <a href="/beras" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
    <form action="/beras/store" method="post" style="margin-top: 1%;">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="merkberas">Merk:</label>
            <div class='col-sm-6 input-group'>
                <span class="input-group-addon">
                    <i class="far fa-copyright"></i>
                </span>
                <input type="text" name="merkberas" class="form-control" pattern="[a-zA-Z0-9\s]+" maxlength="30"
                    placeholder="Bisi" required>
            </div>
        </div>
        <div class="form-group">
            <label for="stockberas">Stock:</label>
            <div class='col-sm-6 input-group'>
                <span class="input-group-addon">
                    <i class="fas fa-list-ol"></i>
                </span>
                <input type="number" name="stockberas" class="form-control" placeholder="10" required>
            </div>
        </div>
        <div class="form-group">
            <div class='col-sm-6 input-group'>
                <div class="checkbox">
                    <label for="tersedia">
                        <input type="checkbox" id="check-sedia">
                        <input type="hidden" name="tersedia" value="N">Apakah tersedia?
                        <script>
                            $(document).ready(function() {
                                $('#check-sedia').change(function() {
                                    var key = $(this).attr('key');
                                    $($('[name="tersedia"]')).val($(this).is(':checked') ? 'Y' : 'N');
                                });
                            });
                        </script>
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data</button>
    </form>
@endsection
