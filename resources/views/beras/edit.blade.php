@extends('layout.happy')
@section('title', 'Data Beras')
@section('judulhalaman', 'EDIT DATA BERAS')

@section('konten')
    @foreach ($beras as $b)
        <a href="/beras/detail/{{ $b->kodeberas }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i>
            Kembali</a>
        <div style="margin-top: 1%;">
            <form action="/beras/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $b->kodeberas }}">
                <div class="form-group">
                    <label for="merkberas">Merk:</label>
                    <div class='col-sm-6 input-group'>
                        <span class="input-group-addon">
                            <i class="far fa-copyright"></i>
                        </span>
                        <input type="text" name="merkberas" class="form-control" pattern="[a-zA-Z0-9\s]+" maxlength="30"
                            required value="{{ $b->merkberas }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="stockberas">Stock:</label>
                    <div class='col-sm-6 input-group'>
                        <span class="input-group-addon">
                            <i class="fas fa-list-ol"></i>
                        </span>
                        <input type="number" name="stockberas" class="form-control" required
                            value="{{ $b->stockberas }}">
                    </div>
                </div>
                <div class="form-group">
                    <div class='col-sm-6 input-group'>
                        <div class="checkbox">
                            <label for="tersedia">
                                <input type="checkbox" id="check-sedia" @if ($b->tersedia === 'Y') checked @endif>
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
        </div>
    @endforeach
@endsection
