<?php

namespace App\Http\Controllers;

use App\Deposito;
use App\ViewDeposito;
use App\Kantor;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DepositoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $deposito = ViewDeposito::where('kode_cabang', 'LIKE', '%'.$request->cari.'%')->orWhere('nama_cabang', 'LIKE', '%'.$request->cari.'%')->orWhere('tanggal', 'LIKE', '%'.$request->cari.'%')->orWhere('realisasi', 'LIKE', '%'.$request->cari.'%')->orWhere('target', 'LIKE', '%'.$request->cari.'%')->orWhere('prosentase', 'LIKE', '%'.$request->cari.'%')->paginate(5);
        } else {
            $deposito = ViewDeposito::all();
            $deposito = ViewDeposito::paginate(5);
        }        
        return view('Deposito/deposito', compact('deposito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kantor = Kantor::with('kantor')->get();
        $deposito = Deposito::all();
        return view('Deposito/simpanDeposito', compact('deposito'), compact('kantor'));
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
            'target' => 'required'
        ]);

        $deposito = DB::SELECT("select * from tb_deposito where kode_cabang = '$request->kode_cabang' AND tanggal = '$request->tanggal'");
        if (count($deposito) == !null) {
            return redirect('/deposito') -> with('status', 'Data Deposito Sudah Pernah Ditambahkan');
        } else {
            Deposito::create( $request -> all() );
            return redirect('/deposito') -> with('status', 'Data Deposito Berhasil Ditambahkan');
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Deposito  $deposito
     * @return \Illuminate\Http\Response
     */
    public function show(Deposito $deposito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deposito  $deposito
     * @return \Illuminate\Http\Response
     */
    public function edit(Deposito $deposito)
    {
        $kantor = Kantor::with('kantor')->get();
        // $deposito = Deposito::all();
        return view('Deposito/editDeposito', compact('deposito'), compact('kantor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deposito  $deposito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deposito $deposito)
    {
        $request -> validate([
            'kode_cabang' => 'required',
            'tanggal' => 'required',
            'realisasi' => 'required',
            'target' => 'required'
        ]);

        $dpst = DB::SELECT("select * from tb_deposito where kode_cabang = '$request->kode_cabang' AND tanggal = '$request->tanggal'");
        if (count($dpst) == !null) {
            return redirect('/deposito') -> with('status', 'Data Deposito Sudah Pernah Ditambahkan');
        } else {
            Deposito::where('id_deposito', $deposito -> id_deposito)
                    ->update([
                        'kode_cabang' => $request -> kode_cabang,
                        'tanggal' => $request -> tanggal,
                        'realisasi' => $request -> realisasi,
                        'target' => $request -> target,
                    ]);
            return redirect('/deposito') -> with('status', 'Data Deposito Berhasil Diubah');            
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deposito  $deposito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deposito $deposito)
    {
        Deposito::destroy($deposito->id_deposito);
        return redirect('/deposito') -> with('status', 'Data Deposito Berhasil Dihapus');
    }
}
