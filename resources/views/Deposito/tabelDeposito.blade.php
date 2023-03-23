@section('tabelDeposito')
<div class="tabelDeposito">
    <table class="table table-hover table-inverse table-responsive">
        <thead class="thead-inverse thead-dark">
            <tr>
                <th>ID</th>
                <th>Kode Cabang</th>
                <th>Nama Cabang</th>
                <th>Tanggal</th>
                <th>Real Income</th>
                <th>Target Income</th>
                <th>Prosentase</th>
                @if (auth()->user()->username == 'admin')
                <th>Aksi</th>                    
                @endif
            </tr>
            </thead>
            @foreach ($deposito as $dpst)       
                <tbody>
                    <tr>
                        <td scope="row">{{ $dpst -> id_deposito }}</td>
                        <td>{{ $dpst -> kode_cabang }}</td>
                        <td>{{ $dpst -> nama_cabang }}</td> 
                        <td>{{ date('d-m-Y', strtotime($dpst -> tanggal)) }}</td>  
                        <td>Rp @convert($dpst -> realisasi)</td>
                        <td>Rp @convert($dpst -> target)</td>
                        <td>{{ $dpst -> prosentase }} %</td>
                        @if (auth()->user()->username == 'admin')
                        <td>
                            <a class="btn btn-success" href="/deposito/{{ $dpst -> id_deposito }}/edit">Edit</a>

                            <form action="/deposito/{{ $dpst -> id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>                            
                            </form>
                        </td>                            
                        @endif
                    </tr>
                </tbody>
            @endforeach
    </table>
    {{ $deposito -> appends('cari') -> links() }}
</div>
@endsection