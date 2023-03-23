@extends('layout/main')
@section('title', 'Form Ubah Data Kantor')

@section('container')
<div class="container">
    <div class="column">
        <div class="row">
            <h1 class="my-3">Form Ubah Data Kantor</h1>
        </div>
    </div>

    <form action="/kantor/{{ $kantor -> kode_cabang }}" method="post">
        @method('patch')
        @csrf
        <table class="table table-light">
                <tbody>
                <tr>
                    <td>
                    <label for="kode_cabang">Kode Cabang</label>
                    </td>
                    <td>
                    <input type="text" class="form-control @error('kode_cabang') is-invalid @enderror" name="kode_cabang" id="kode_cabang" placeholder="Input Kode Cabang" value="{{ $kantor -> kode_cabang }}">
                        @error('kode_cabang')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror                        
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="nama_cabang">Nama Cabang</label>
                    </td>
                    <td>
                        <input type="text" class="form-control @error('nama_cabang') is-invalid @enderror" name="nama_cabang" id="nama_cabang" placeholder="Input Nama Cabang" value="{{ $kantor -> nama_cabang }}">
                        @error('nama_cabang')
                            <div class="invalid-feedback">{{$message}}</div>                            
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="kelas_cabang">Kelas Cabang</label>
                    </td>
                    <td>
                        <select id="kelas_cabang" class="custom-select @error('kelas_cabang') is-invalid @enderror" name="kelas_cabang">
                            <option value="{{ $kantor -> kelas_cabang}}">{{ $kantor -> kelas_cabang}}</option>
                            <option value="Kelas 1">Kelas 1</option>
                            <option value="Kelas 2">Kelas 2</option>
                            <option value="Kelas 3">Kelas 3</option>
                        </select>
                        @error('kelas_cabang')
                            <div class="invalid-feedback">{{$message}}</div>                            
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="lokasi">Lokasi</label>
                    </td>
                    <td>
                    <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" id="lokasi" placeholder="Isi Lokasi Cabang" value="{{ $kantor -> lokasi }}">
                    @error('lokasi')
                        <div class="invalid-feedback">{{$message}}</div>                            
                    @enderror
                    </td>
                </tr>
                </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Ubah</button>
        <button class="btn btn-secondary" type="reset">Reset</button>
        <a href="/kantor" class="btn btn-warning">Kembali</a>
    </form>
</div>
@endsection