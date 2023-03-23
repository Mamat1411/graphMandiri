@extends('layout/main')
@include('Dpk/tabelDpk')
@section('title', 'Mandiri Area Malang')

@section('container')
<div class="container">
    <div class="column">
        <div class="row">
            <h1 class="my-3">Ini Halaman Dpk</h1>
        </div>
    </div>
</div>

<div class="container col-md-9">
    {{-- <a href="/casa/create" class="btn btn-primary my-3">Tambah Data Dpk</a> --}}
    @csrf
    <form class="search-form form-inline d-inline my-3" method="GET" action="/deposito">
        <input class="form-control mr-sm-2 my-3" type="text" name="cari" placeholder="Pencarian Data...">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
    </form>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    
    @yield('tabelDpk')
</div>
@endsection