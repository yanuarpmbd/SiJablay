<?php

namespace App\Models\All;

use Illuminate\Database\Eloquent\Model;

class SubRkoModel extends Model
{
    protected $table = 'rko_models_baru';

    public function targetSub(){
        return $this->HasMany(TargetSubRkoModel::class, 'sub_rko_id');
    }
}
