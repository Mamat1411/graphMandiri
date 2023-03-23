<?php

namespace App\Http\Controllers;

use App\Kantor;
use Illuminate\Http\Request;

class KantorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $kantor = Kantor::where('kode_cabang', 'LIKE', '%'.$request->cari.'%')->orWhere('nama_cabang', 'LIKE', '%'.$request->cari.'%')->orWhere('kelas_cabang', 'LIKE', '%'.$request->cari.'%')->orWhere('lokasi', 'LIKE', '%'.$request->cari.'%')->paginate(5);
        } else {
            $kantor = Kantor::all();            
            $kantor = Kantor::paginate(5);
        }
        return view('Kantor/kantor', compact('kantor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Kantor/simpanKantor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //This is the first way to store data to database using save
        // $kantor = new Kantor;
        // $kantor -> kode_cabang = $request -> kode_cabang;
        // $kantor -> nama_cabang = $request -> nama_cabang;
        // $kantor -> kelas_cabang = $request -> kelas_cabang;
        // $kantor -> lokasi = $request -> lokasi;
        // $kantor->save();

        //This is the second way to store data to database using fillable variable located in model
        //And the data is initiated one by one
        // Kantor::create([
        //     'kode_cabang' => $request -> kode_cabang,
        //     'nama_cabang' => $request -> nama_cabang,
        //     'kelas_cabang' => $request -> kelas_cabang,
        //     'lokasi' => $request -> lokasi,
        // ]);

        //This is the validation of the create form
        $request -> validate([
            'kode_cabang' => 'required',
            'nama_cabang' => 'required',
            'kelas_cabang' => 'required',
            'lokasi' => 'required'
        ]);

        //This is a store function using fillable variation located in model
        //but this code is simpler than the second one
        Kantor::create( $request -> all() );

        return redirect('/kantor') -> with('status', 'Data Kantor Cabang Berhasil Ditambahkan');
    }
    
    //This is a customized error messages for the validation
    public function messages(){
        return[
            'kode_cabang.required' => 'Kode Cabang Harus diisi'
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kantor  $kantor
     * @return \Illuminate\Http\Response
     */
    public function show(Kantor $kantor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kantor  $kantor
     * @return \Illuminate\Http\Response
     */
    public function edit(Kantor $kantor)
    {
        return view('Kantor/editKantor', compact('kantor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kantor  $kantor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kantor $kantor)
    {
        $request -> validate([
            'kode_cabang' => 'required',
            'nama_cabang' => 'required',
            'kelas_cabang' => 'required',
            'lokasi' => 'required'
        ]);
        
        Kantor::where('kode_cabang', $kantor -> kode_cabang)
                ->update([
                    'kode_cabang' => $request -> kode_cabang,
                    'nama_cabang' => $request -> nama_cabang,
                    'kelas_cabang' => $request -> kelas_cabang,
                    'lokasi' => $request -> lokasi,
                ]);
        return redirect('/kantor') -> with('status', 'Data Kantor Cabang Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kantor  $kantor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kantor $kantor)
    {
        Kantor::destroy($kantor->kode_cabang);
        return redirect('/kantor') -> with('status', 'Data Kantor Cabang Berhasil Dihapus');
    }
}
