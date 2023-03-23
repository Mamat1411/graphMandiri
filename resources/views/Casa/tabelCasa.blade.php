@section('tabelCasa')
<div class="tabelCasa">
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
            @foreach ($casa as $cs)       
                <tbody>
                    <tr>
                        <td scope="row">{{ $loop -> iteration }}</td>
                        <td>{{ $cs -> kode_cabang }}</td>
                        <td>{{ $cs -> nama_cabang }}</td> 
                        <td>{{ date('d-m-Y', strtotime($cs -> tanggal)) }}</td>  
                        <td>Rp @convert($cs -> realisasi)</td>
                        <td>Rp @convert($cs -> target)</td>
                        <td>{{ $cs -> prosentase }} %</td>
                        {{-- <td>
                            <a class="btn btn-success" href="/casa/{{ $cs -> id_casa }}/edit">Edit</a>

                            <form action="/casa/{{ $cs -> id_casa }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>                            
                            </form>
                        </td> --}}
                    </tr>
                </tbody>
            @endforeach
    </table>
    {{ $casa -> appends('cari') -> links() }}
</div>
@endsection