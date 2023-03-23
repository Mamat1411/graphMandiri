<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kantor extends Model
{
    protected $table = 'tb_kantor';
    protected $primaryKey = 'kode_cabang';
    protected $fillable = ['kode_cabang', 'nama_cabang', 'kelas_cabang', 'lokasi'];
    public $timestamps = false;

    public function tabungan()
    {
        return $this->belongsTo(Tabungan::class, 'kode_cabang');
    }

    public function kantor()
    {
        return $this->hasMany(Kantor::class, 'kode_cabang');
    }

    public function giro()
    {
        return $this->belongsTo(Giro::class, 'kode_cabang');
    }

    public function deposito()
    {
        return $this->belongsTo(Deposito::class, 'kode_cabang');
    }

    public function dpk()
    {
        return $this->belongsTo(Dpk::class, 'kode_cabang');
    }

    public function casa()
    {
        return $this->belongsTo(Casa::class, 'kode_cabang');
    }
}
