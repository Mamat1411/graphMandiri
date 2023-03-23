<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    protected $table = 'tb_tabungan';
    protected $primaryKey = 'id_tabungan';
    protected $fillable = ['kode_cabang', 'tanggal', 'realisasi', 'target'];
    public $timestamps = false;

    public function kantor()
    {
        return $this->hasMany(Kantor::class, 'kode_cabang');
    }

    public function tabungan()
    {
        return $this->belongsTo(Tabungan::class, 'kode_cabang');
    }
}
