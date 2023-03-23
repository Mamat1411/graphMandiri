<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Giro extends Model
{
    protected $table = 'tb_giro';
    protected $primaryKey = 'id_giro';
    protected $fillable = ['kode_cabang', 'tanggal', 'realisasi', 'target'];
    public $timestamps = false;

    public function kantor()
    {
        return $this->hasMany(Kantor::class, 'kode_cabang');
    }

    public function giro()
    {
        return $this->belongsTo(Giro::class, 'kode_cabang');
    }
}
