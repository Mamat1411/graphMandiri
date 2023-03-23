@extends('layout/main')
@section('title', 'Form Ubah Data Deposito')

@section('container')
<div class="container">
    <div class="column">
        <div class="row">
            <h1 class="my-3">Form Ubah Data Deposito</h1>
        </div>
    </div>

    <form action="/deposito/{{ $deposito -> id_deposito }}" method="post">
        @method('patch')
        @csrf
        <table class="table table-light">
                <tbody>
                <tr>
                    <td>
                    <label for="kode_cabang">Kode Cabang</label>
                    </td>
                    <td>
                        <select id="kode_cabang" class="custom-select" name="kode_cabang">
                            <option value="{{ $deposito['kode_cabang'] }}">{{ $deposito['kode_cabang'] }}</option>
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
                    <input type="date" class="form-control" name="tanggal" placeholder="Isi Tanggal" value="{{ $deposito -> tanggal }}">
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="realisasi">Real Income</label>
                    </td>
                    <td>
                    <input type="text" class="form-control" name="realisasi" id="realisasi" placeholder="Isi Real Income" value="{{ $deposito -> realisasi }}">
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="target">Target Income</label>
                    </td>
                    <td>
                    <input type="text" class="form-control" name="target" id="target" placeholder="Isi Target Income" value="{{ $deposito -> target }}">
                    </td>
                </tr>
                </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Ubah</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
        <a href="/deposito" class="btn btn-warning">Kembali</a>
    </form>
</div>
@endsection