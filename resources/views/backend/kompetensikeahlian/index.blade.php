@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark">Data kompetensi keahlian</div>
                <div class="card-body">
                <center>
                    <a href="{{ route ('kompetensikeahlian.create') }}" class="btn btn-outline-info">Tambah Data</a>
                </center>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><center>No</center></th>
                            <th><center>kompetensi id</center></th>
                            <th><center>bidang studi</center></th>\
                            <th><center>kompetensi nama</center></th>
                            <th colspan="3" style="text-align: center;">AKSI</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach($kompetensikeahlian as $data)
                        <tr>
                            <td><center>{{ $no++ }}</center></td>
                            <td><center>{{ $data->kompetensi_kode}}</center></td>
                            <td><center>{{ $data->bidangstudi->bidang_nama }}</center></td>\
                            <td><center>{{ $data->kompetensi_nama }}</center></td>

                            <td>
                                <a href="{{ route('kompetensikeahlian.edit',$data->id) }}"
                                class="btn btn-outline-info">Edit Data</a>
                            </td>

                            <td>
                                <form action="{{ route('kompetensikeahlian.destroy',$data->id) }}" method="post">
                                    @csrf
                                
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-outline-info" type="submit">
                                        Hapus Data
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection