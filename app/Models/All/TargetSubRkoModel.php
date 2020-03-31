<?php

namespace App\Models\All;

use App\Models\Sekretariat\SubMenuKegiatanModels;
use Illuminate\Database\Eloquent\Model;

class TargetSubRkoModel extends Model
{
    protected $table = 'target_sub_rkos';

    public function subRko(){
        return $this->belongsTo(SubMenuKegiatanModels::class, 'sub_rko_id');
    }
}
