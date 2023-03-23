<?php

namespace App\Http\Controllers;

use App\Giro;
use App\ViewGiro;
use App\Kantor;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $giro = ViewGiro::where('kode_cabang', 'LIKE', '%'.$request->cari.'%')->orWhere('nama_cabang', 'LIKE', '%'.$request->cari.'%')->orWhere('tanggal', 'LIKE', '%'.$request->cari.'%')->orWhere('realisasi', 'LIKE', '%'.$request->cari.'%')->orWhere('target', 'LIKE', '%'.$request->cari.'%')->orWhere('prosentase', 'LIKE', '%'.$request->cari.'%')->paginate(5);
        } else {
            $giro = ViewGiro::all();
            $giro = ViewGiro::paginate(5);
        }        
        return view('Giro/giro', compact('giro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kantor = Kantor::with('kantor')->get();
        $giro = Giro::all();
        return view('Giro/simpanGiro', compact('giro'), compact('kantor'));
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

        $giro = DB::SELECT("select * from tb_giro where kode_cabang = '$request->kode_cabang' AND tanggal = '$request->tanggal'");
        if (count($giro) == !null) {
            return redirect('/giro') -> with('status', 'Data Giro Sudah Pernah Ditambahkan');
        } else {
            Giro::create( $request -> all() );
            return redirect('/giro') -> with('status', 'Data Giro Berhasil Ditambahkan');
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Giro  $giro
     * @return \Illuminate\Http\Response
     */
    public function show(Giro $giro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Giro  $giro
     * @return \Illuminate\Http\Response
     */
    public function edit(Giro $giro)
    {
        $kantor = Kantor::with('kantor')->get();
        // $giro = Giro::all();
        return view('Giro/editGiro', compact('giro'), compact('kantor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Giro  $giro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Giro $giro)
    {
        $request -> validate([
            'kode_cabang' => 'required',
            'tanggal' => 'required',
            'realisasi' => 'required',
            'target' => 'required'
        ]);

        $gr = DB::SELECT("select * from tb_giro where kode_cabang = '$request->kode_cabang' AND tanggal = '$request->tanggal'");
        if (count($gr) == !null) {
            return redirect('/giro') -> with('status', 'Data Giro Sudah Pernah Ditambahkan');
        } else {
            Giro::where('id_giro', $giro -> id_giro)
                    ->update([
                        'kode_cabang' => $request -> kode_cabang,
                        'tanggal' => $request -> tanggal,
                        'realisasi' => $request -> realisasi,
                        'target' => $request -> target,
                    ]);
            return redirect('/giro') -> with('status', 'Data Giro Berhasil Diubah');            
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Giro  $giro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Giro $giro)
    {
        Giro::destroy($giro->id_giro);
        return redirect('/giro') -> with('status', 'Data Giro Berhasil Dihapus');
    }
}
