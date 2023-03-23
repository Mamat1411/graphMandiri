@section('tabelGiro')
<div class="tabelGiro">
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
            @foreach ($giro as $gr)       
                <tbody>
                    <tr>
                        <td scope="row">{{ $gr -> id_giro }}</td>
                        <td>{{ $gr -> kode_cabang }}</td>
                        <td>{{ $gr -> nama_cabang }}</td> 
                        <td>{{ date('d-m-Y', strtotime($gr -> tanggal)) }}</td>  
                        <td>Rp  @convert($gr -> realisasi)</td>
                        <td>Rp @convert($gr -> target)</td>
                        <td>{{ $gr -> prosentase }} %</td>
                        @if (auth()->user()->username == 'admin')
                        <td>
                            <a class="btn btn-success" href="/giro/{{ $gr -> id_giro }}/edit">Edit</a>

                            <form action="/giro/{{ $gr -> id_giro }}" method="POST" class="d-inline">
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
    {{ $giro -> appends('cari') -> links() }}
</div>
@endsection