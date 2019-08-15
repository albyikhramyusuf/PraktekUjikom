@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Edit Data</div>

                <div class="card-body">
                <form action="{{ route('bidangstudi.update', $bidangstudi->id )}}" method="POST">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">kode bidangstudi</label>
                    <input class="form-control" value="{{ $bidangstudi->bidang_kode }}" type="text" name="bidang_kode">
                    </div>
                    <div class="form-group">
                        <label for="">nama bidangstudi</label>
                    <input class="form-control" value="{{ $bidangstudi->bidang_nama }}" type="text" name="bidang_nama">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-info">
                            Simpan data
                        </button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
