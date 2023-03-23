<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposito extends Model
{
    protected $table = 'tb_deposito';
    protected $primaryKey = 'id_deposito';
    protected $fillable = ['kode_cabang', 'tanggal', 'realisasi', 'target'];
    public $timestamps = false;

    public function kantor()
    {
        return $this->hasMany(Kantor::class, 'kode_cabang');
    }

    public function deposito()
    {
        return $this->belongsTo(Tabungan::class, 'kode_cabang');
    }
}
