@section('tabelKantor')
@csrf
<div class="tabelKantor">
    <table class="table table-hover table-inverse table-responsive">
        <thead class="thead-inverse thead-dark">
            <tr>
                <th>#</th>
                <th>Kode Cabang</th>
                <th>Nama Cabang</th>
                <th>Kelas Cabang</th>
                <th>Lokasi</th>
                @if (auth()->user()->username == 'admin')
                <th>Aksi</th>                    
                @endif
            </tr>
            </thead>
            <tbody>
                
                @foreach ($kantor as $kntr)
                <tr>
                    <td scope="row">{{ $loop -> iteration }} </td>
                    <td>{{ $kntr -> kode_cabang }}</td>
                    <td>{{ $kntr -> nama_cabang }}</td>
                    <td>{{ $kntr -> kelas_cabang }}</td>
                    <td>{{ $kntr -> lokasi }}</td>
                    @if (auth()->user()->username == 'admin')
                    <td>
                        <a class="btn btn-success" href="/kantor/{{$kntr -> kode_cabang}}/edit">Edit</a>

                        <form action="/kantor/{{ $kntr -> kode_cabang }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>                            
                        </form>
                    </td>                        
                    @endif
                </tr>
                @endforeach
            </tbody>
    </table>
    {{$kantor -> appends('cari') -> links() }}
</div>
@endsection