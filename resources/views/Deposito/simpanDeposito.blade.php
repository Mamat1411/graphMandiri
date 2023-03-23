@extends('layout/main')
@section('title', 'Form Tambah Data Deposito')

@section('container')
<div class="container">
    <div class="column">
        <div class="row">
            <h1 class="my-3">Form Tambah Data Deposito</h1>
        </div>
    </div>

    <form action="/deposito" method="post">
        @csrf
        <table class="table table-light">
                <tbody>
                <tr>
                    <td>
                    <label for="kode_cabang">Kode Cabang</label>
                    </td>
                    <td>
                        <select id="kode_cabang" class="custom-select @error('kode_cabang') is-invalid @enderror" name="kode_cabang">
                            <option>--Pilih Kode Cabang--</option>
                        @foreach ($kantor as $kntr)
                            <option value="{{ $kntr['kode_cabang'] }}">{{ $kntr['kode_cabang'] }}</option>                               
                        @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="tanggal">Tanggal</label>
                    </td>
                    <td>
                    <input type="date" class="form-control" name="tanggal" placeholder="Isi Tanggal">
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="realisasi">Real Income</label>
                    </td>
                    <td>
                    <input type="text" class="form-control" name="realisasi" id="realisasi" placeholder="Isi Real Income">
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="target">Target Income</label>
                    </td>
                    <td>
                    <input type="text" class="form-control" name="target" id="target" placeholder="Isi Target Income">
                    </td>
                </tr>
                </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
        <a href="/deposito" class="btn btn-warning">Kembali</a>
    </form>
</div>
@endsection