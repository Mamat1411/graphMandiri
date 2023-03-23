@section('formDpk')
<div class="form-dpk">
    <table class="table table-light">
            <tbody>
            <tr>
                <td>
                <label for="">Kode Cabang</label>
                </td>
                <td>
                    <select id="my-select" class="custom-select" name="kode_cabang">
                        <option>--Pilih Kode Cabang--</option>
                        <option value="">14000</option>
                        <option value="">14001</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                <label for="">Nama Cabang</label>
                </td>
                <td>
                    <select id="my-select" class="custom-select" name="nama_cabang">
                        <option>--Sesuaikan Nama Cabang--</option>
                        <option value="">KC Wahid Hasyim</option>
                        <option value="">KCP Merdeka</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                <label for="">Tanggal</label>
                </td>
                <td>
                <input type="date" class="form-control" name="tanggal" placeholder="Isi Tanggal">
                </td>
            </tr>
            <tr>
                <td>
                <label for="">Real Income</label>
                </td>
                <td>
                <input type="text" class="form-control" name="real_income" placeholder="Isi Real Income">
                </td>
            </tr>
            <tr>
                <td>
                <label for="">Target Income</label>
                </td>
                <td>
                <input type="text" class="form-control" name="target_income" placeholder="Isi Target Income">
                </td>
            </tr>
            </tbody>
    </table>
    <button type="button" class="btn btn-primary">Simpan</button>
    <button type="reset" class="btn btn-primary">Reset</button>
</div>
@endsection