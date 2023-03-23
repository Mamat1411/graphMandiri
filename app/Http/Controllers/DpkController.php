<?php

namespace App\Http\Controllers;

use App\Dpk;
use Illuminate\Http\Request;

class DpkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $dpk = Dpk::where('kode_cabang', 'LIKE', '%'.$request->cari.'%')->orWhere('nama_cabang', 'LIKE', '%'.$request->cari.'%')->orWhere('tanggal', 'LIKE', '%'.$request->cari.'%')->orWhere('realisasi', 'LIKE', '%'.$request->cari.'%')->orWhere('target', 'LIKE', '%'.$request->cari.'%')->orWhere('prosentase', 'LIKE', '%'.$request->cari.'%')->paginate(5);
        } else {
            $dpk = Dpk::all();
            $dpk = Dpk::paginate(5);
        }
        return view('Dpk/dpk', compact('dpk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dpk  $dpk
     * @return \Illuminate\Http\Response
     */
    public function show(Dpk $dpk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dpk  $dpk
     * @return \Illuminate\Http\Response
     */
    public function edit(Dpk $dpk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dpk  $dpk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dpk $dpk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dpk  $dpk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dpk $dpk)
    {
        //
    }
}
