<?php

namespace App\Models\PPL;

use Illuminate\Database\Eloquent\Model;

class TabulasiModel extends Model
{
    protected $table = 'rekap_pengaduan_models';
    protected $fillable= ['id'];
    public $timestamps = true;



}
