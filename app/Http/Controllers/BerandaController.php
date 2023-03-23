<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Saving Account's Chart
        $tabungan = DB::table('ViewTabungan')->select('realisasi')->get();
        $realTabungan = [];
        foreach ($tabungan as $tb) {
            $realTabungan[] = $tb->realisasi;
        }

        $tabungan = DB::table('ViewTabungan')->select('target')->get();
        $targetTabungan = [];
        foreach ($tabungan as $tb) {
            $targetTabungan[] = $tb->target;
        }

        $tanggal = DB::table('ViewTabungan')->select('tanggal')->get();
        $tglTabungan = [];
        foreach ($tanggal as $tg) {
            $tglTabungan[] = $tg->tanggal;
        }

        //Current Account's Chart
        $giro = DB::table('ViewGiro')->select('realisasi')->get();
        $realGiro = [];
        foreach ($giro as $tb) {
            $realGiro[] = $tb->realisasi;
        }

        $giro = DB::table('ViewGiro')->select('target')->get();
        $targetGiro = [];
        foreach ($giro as $tb) {
            $targetGiro[] = $tb->target;
        }

        $tanggal = DB::table('ViewGiro')->select('tanggal')->get();
        $tglGiro = [];
        foreach ($tanggal as $tg) {
            $tglGiro[] = $tg->tanggal;
        }

        //Deposit Account
        $deposito = DB::table('ViewDeposito')->select('realisasi')->get();
        $realDeposito = [];
        foreach ($deposito as $tb) {
            $realDeposito[] = $tb->realisasi;
        }

        $deposito = DB::table('ViewDeposito')->select('target')->get();
        $targetDeposito = [];
        foreach ($deposito as $tb) {
            $targetDeposito[] = $tb->target;
        }

        $tanggal = DB::table('ViewDeposito')->select('tanggal')->get();
        $tglDeposito = [];
        foreach ($tanggal as $tg) {
            $tglDeposito[] = $tg->tanggal;
        }

        //DPK
        $dpk = DB::table('ViewDpk')->select('realisasi')->get();
        $realDpk = [];
        foreach ($dpk as $tb) {
            $realDpk[] = $tb->realisasi;
        }

        $dpk = DB::table('ViewDpk')->select('target')->get();
        $targetDpk = [];
        foreach ($dpk as $tb) {
            $targetDpk[] = $tb->target;
        }

        $tanggal = DB::table('ViewDpk')->select('tanggal')->get();
        $tglDpk = [];
        foreach ($tanggal as $tg) {
            $tglDpk[] = $tg->tanggal;
        }

        //CASA
        $casa = DB::table('ViewCasa')->select('realisasi')->get();
        $realCasa = [];
        foreach ($casa as $tb) {
            $realCasa[] = $tb->realisasi;
        }

        $casa = DB::table('ViewCasa')->select('target')->get();
        $targetCasa = [];
        foreach ($casa as $tb) {
            $targetCasa[] = $tb->target;
        }

        $tanggal = DB::table('ViewCasa')->select('tanggal')->get();
        $tglCasa = [];
        foreach ($tanggal as $tg) {
            $tglCasa[] = $tg->tanggal;
        }

        return view('Beranda/beranda', ['realTabungan' => $realTabungan, 'targetTabungan' => $targetTabungan, 'tglTabungan' => $tglTabungan,
                                        'realGiro' => $realGiro, 'targetGiro' => $targetGiro, 'tglGiro' => $tglGiro,
                                        'realDeposito' => $realDeposito, 'targetDeposito' => $targetDeposito, 'tglDeposito' => $tglDeposito,
                                        'realDpk' => $realDpk, 'targetDpk' => $targetDpk, 'tglDpk' => $tglDpk,
                                        'realCasa' => $realCasa, 'targetCasa' => $targetCasa, 'tglCasa' => $tglCasa]);
    }
}