@section('tabelTabungan')
<div class="tabelTabungan">
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
            @foreach ($tabungan as $tbn)       
                <tbody>
                    <tr>
                        <td scope="row">{{ $tbn -> id_tabungan }}</td>
                        <td>{{ $tbn -> kode_cabang }}</td>
                        <td>{{ $tbn -> nama_cabang }}</td> 
                        <td>{{date('d-m-Y', strtotime( $tbn -> tanggal))}}</td>  
                        <td>Rp @convert($tbn -> realisasi)</td>
                        <td>Rp @convert($tbn -> target)</td>
                        <td>{{ $tbn -> prosentase }}%</td>
                        @if (auth()->user()->username == 'admin')
                        <td>
                            <a class="btn btn-success" href="/tabungan/{{ $tbn -> id_tabungan }}/edit">Edit</a>

                            <form action="/tabungan/{{ $tbn -> id_tabungan }}" method="POST" class="d-inline">
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
    {{ $tabungan -> appends('cari') -> links() }}
</div>
@endsection