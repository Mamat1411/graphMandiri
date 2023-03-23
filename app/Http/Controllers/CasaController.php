<?php

namespace App\Http\Controllers;

use App\Casa;
use Illuminate\Http\Request;

class CasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $casa = Casa::where('kode_cabang', 'LIKE', '%'.$request->cari.'%')->orWhere('nama_cabang', 'LIKE', '%'.$request->cari.'%')->orWhere('tanggal', 'LIKE', '%'.$request->cari.'%')->orWhere('realisasi', 'LIKE', '%'.$request->cari.'%')->orWhere('target', 'LIKE', '%'.$request->cari.'%')->orWhere('prosentase', 'LIKE', '%'.$request->cari.'%')->paginate(5);
        } else {
            $casa = Casa::all();
            $casa = Casa::paginate(5);
        }
        return view('Casa/casa', compact('casa'));
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
     * @param  \App\Casa  $casa
     * @return \Illuminate\Http\Response
     */
    public function show(Casa $casa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Casa  $casa
     * @return \Illuminate\Http\Response
     */
    public function edit(Casa $casa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Casa  $casa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Casa $casa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Casa  $casa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Casa $casa)
    {
        //
    }
}
