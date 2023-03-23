@extends('layout/main')
@section('title', 'Form Ubah Data Tabungan')

@section('container')
<div class="container">
    <div class="column">
        <div class="row">
            <h1 class="my-3">Form Ubah Data Tabungan</h1>
        </div>
    </div>

    <form action="/tabungan/{{ $tabungan -> id_tabungan }}" method="post">
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
                            <option value="{{ $tabungan['kode_cabang'] }}">{{ $tabungan['kode_cabang'] }}</option>
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
                    <input type="date" class="form-control" name="tanggal" placeholder="Isi Tanggal" value="{{ $tabungan -> tanggal }}">
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="realisasi">Real Income</label>
                    </td>
                    <td>
                    <input type="text" class="form-control" name="realisasi" id="realisasi" placeholder="Isi Real Income" value="{{ $tabungan -> realisasi }}">
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="target">Target Income</label>
                    </td>
                    <td>
                    <input type="text" class="form-control" name="target" id="target" placeholder="Isi Target Income" value="{{ $tabungan -> target }}">
                    </td>
                </tr>
                </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Ubah</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
        <a href="/tabungan" class="btn btn-warning">Kembali</a>
    </form>
</div>
@endsection