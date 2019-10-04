<?php

namespace App\Models\All;

use Illuminate\Database\Eloquent\Model;

class TempatKegModels extends Model
{
    protected $table = 'tempat_keg_models';

    public $timestamps = false;

    public function tempat_keg(){
        $this->belongsTo(KegiatanModels::class, 'id');
    }
}
