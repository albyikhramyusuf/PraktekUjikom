@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah data</div>

                <div class="card-body">
                <form action="{{ route('kompetensikeahlian.store') }}" method="post">
                    @csrf
                <div class="form-group">
                    <label for="">kompetensi id</label>
                    <input class="form-control" type="text" name="kompetensi_kode">
                </div>
                <div class="form-group">
                    <label for="">bidang studi</label>
                    <select name="bidang_id" class="form-control" required>
                        @foreach($bidangstudi as $data)
                        <option value="{{ $data->id }}">{{ $data->bidang_nama }}</option>
                        @endforeach
                      </select>
                    </div>
                <div class="form-group">
                    <label for="">kompetensi Nama</label>
                    <input class="form-control" type="text" name="kompetensi_nama">
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-outline-info">Simpan Data</button>
                    <a href="{{ route('kompetensikeahlian.index') }}" class="btn btn-outline-info">Back</a>
                </div>
                </form>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
