<?php

namespace App\Http\Controllers;

use App\Tabungan;
use App\Kantor;
use App\ViewTabungan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TabunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $tabungan = ViewTabungan::where('kode_cabang', 'LIKE', '%'.$request->cari.'%')->orWhere('nama_cabang', 'LIKE', '%'.$request->cari.'%')->orWhere('tanggal', 'LIKE', '%'.$request->cari.'%')->orWhere('realisasi', 'LIKE', '%'.$request->cari.'%')->orWhere('target', 'LIKE', '%'.$request->cari.'%')->orWhere('prosentase', 'LIKE', '%'.$request->cari.'%')->paginate(5);
        }else {
            $tabungan = ViewTabungan::all();
            $tabungan = ViewTabungan::Paginate(5);
        }
        return view('Tabungan/tabungan', compact('tabungan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kantor = Kantor::with('kantor')->get();
        $tabungan = Tabungan::all();
        return view('Tabungan/simpanTabungan', compact('tabungan'), compact('kantor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'kode_cabang' => 'required',
            'tanggal' => 'required',
            'realisasi' => 'required',
            'target' => 'required',
        ]);
        
        $tabungan = DB::SELECT("select * from tb_tabungan where kode_cabang = '$request->kode_cabang' AND tanggal = '$request->tanggal'");
        if (count($tabungan) == !null) {
            return redirect('/tabungan') -> with('status', 'Data Tabungan Sudah Pernah Ditambahkan');
        } else {
            Tabungan::create( $request -> all() );
            return redirect('/tabungan') -> with('status', 'Data Tabungan Berhasil Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function show(Tabungan $tabungan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabungan $tabungan)
    {
        $kantor = Kantor::with('kantor')->get();
        // $tabungan = Tabungan::all();
        return view('Tabungan/editTabungan', compact('tabungan'), compact('kantor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tabungan $tabungan)
    {
        $request -> validate([
            'kode_cabang' => 'required',
            'tanggal' => 'required',
            'realisasi' => 'required',
            'target' => 'required'
        ]);

        $tbn = DB::SELECT("select * from tb_tabungan where kode_cabang = '$request->kode_cabang' AND tanggal = '$request->tanggal'");
        if (count($tbn) == !null) {
            return redirect('/tabungan') -> with('status', 'Data Tabungan Sudah Pernah Ditambahkan');
        } else {
            Tabungan::where('id_tabungan', $tabungan -> id_tabungan)
                    ->update([
                        'kode_cabang' => $request -> kode_cabang,
                        'tanggal' => $request -> tanggal,
                        'realisasi' => $request -> realisasi,
                        'target' => $request -> target,
                    ]);
            return redirect('/tabungan') -> with('status', 'Data Tabungan Berhasil Diubah');            
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabungan $tabungan)
    {
        Tabungan::destroy($tabungan->id_tabungan);
        return redirect('/tabungan') -> with('status', 'Data Tabungan Berhasil Dihapus');
    }
}
