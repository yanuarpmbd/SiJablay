<?php

namespace App\Models\Sekretariat;

use Illuminate\Database\Eloquent\Model;

class PenggunaanNomorModel extends Model
{
    protected $table = 'penggunaan_nomors';

    public function kodenomor(){
        return $this->belongsTo(ArsipNomor::class, 'arsip_id');
    }
}
