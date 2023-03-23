@extends('layout/main')
@include('Kantor/tabelKantor')
@section('title', 'Mandiri Area Malang')

@section('container')
<div class="container">
    <div class="column">
        <div class="row">
            <h1 class="my-3">Ini Halaman Daftar Kantor Cabang</h1>
        </div>
    </div>
</div>
<div class="container col-md-9">
    @if (auth()->user()->username == 'admin')
    <a href="/kantor/create" class="btn btn-primary my-3">Tambah Data Kantor</a>        
    @endif
    @csrf
    <form class="search-form-kantor form-inline d-inline my-3" method="GET" action="/kantor">
        <input class="form-control mr-sm-2 my-3" type="text" name="cari" placeholder="Pencarian Data...">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
    </form>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    
    @yield('tabelKantor')
</div>
@endsection