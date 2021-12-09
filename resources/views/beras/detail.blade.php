@extends('layout.happy')
@section('title', 'Data Beras')
@section('judulhalaman', 'DETAIL BERAS')

@section('konten')
    <a href="/beras" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
    @foreach ($beras as $b)
        <div style="margin-top: 1%;">
            <input type="hidden" name="id" value="{{ $b->kodeberas }}">
            <div class="form-group">
                <label>Merk:</label>
                <div class='col-sm-6 input-group'>
                    <span class="input-group-addon">
                        <i class="far fa-copyright"></i>
                    </span>
                    <span class="form-control">{{ $b->merkberas }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="stockberas">Stock:</label>
                <div class='col-sm-6 input-group'>
                    <span class="input-group-addon">
                        <i class="fas fa-list-ol"></i>
                    </span>
                    <span class="form-control">{{ $b->stockberas }}</span>
                </div>
            </div>
            <div class="form-group">
                <div class='col-sm-6 input-group'>
                    <div class="checkbox">
                        <label for="tersedia">
                            <input type="checkbox" @if ($b->tersedia === 'Y') checked @endif disabled>Apakah tersedia?
                        </label>
                    </div>
                </div>
            </div>
            <a href="/beras/edit/{{ $b->kodeberas }}" class="btn btn-warning"><i class="fas fa-edit"></i>
                Edit</a>
        </div>
    @endforeach
@endsection
