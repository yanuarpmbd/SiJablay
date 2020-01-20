<?php

namespace App\Models\PPL;

use App\Models\Yanzin\SektorModel;
use Illuminate\Database\Eloquent\Model;

class RekapPengaduanModels extends Model
{
    public function sektor(){
        return $this->belongsTo(SektorModel::class, 'sektor');
    }

    public function layanan(){
        return $this->belongsTo(LayananModel::class, 'jenis_layanan');
    }

    public function media(){
        return $this->belongsTo(MediaModel::class, 'media');
    }
}
