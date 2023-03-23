@section('tabelDpk')
<div class="tabelDpk">
    <table class="table table-hover table-inverse table-responsive">
        <thead class="thead-inverse thead-dark">
            <tr>
                <th>#</th>
                <th>Kode Cabang</th>
                <th>Nama Cabang</th>
                <th>Tanggal</th>
                <th>Real Income</th>
                <th>Target Income</th>
                <th>Prosentase</th>
                {{-- <th>Aksi</th> --}}
            </tr>
        </thead>
            @foreach ($dpk as $dp)       
                <tbody>
                    <tr>
                        <td scope="row">{{ $loop -> iteration }}</td>
                        <td>{{ $dp -> kode_cabang }}</td>
                        <td>{{ $dp -> nama_cabang }}</td> 
                        <td>{{ date('d-m-Y', strtotime($dp -> tanggal)) }}</td>  
                        <td>Rp @convert($dp -> realisasi)</td>
                        <td>Rp @convert($dp -> target)</td>
                        <td>{{ $dp -> prosentase }} %</td>
                        {{-- <td>
                            <a class="btn btn-success" href="/casa/{{ $dpk -> id_casa }}/edit">Edit</a>

                            <form action="/casa/{{ $dpk -> id_casa }}" method="POST" class="d-inline">
                                @method('delete')
                                @dpkrf
                                <button type="submit" class="btn btn-danger">Delete</button>                            
                            </form>
                        </td> --}}
                    </tr>
                </tbody>
            @endforeach
    </table>
    {{ $dpk -> appends('cari') -> links() }}
</div>
@endsection