<?php

namespace App\Models\Sekretariat;

use App\Models\All\SubRkoModel;
use Illuminate\Database\Eloquent\Model;

class RkoModel extends Model
{
    protected $table = 'rko_models';

    protected $primaryKey = 'id';

    public $timestamps = true;

    public function subRko(){
        return $this->HasMany(SubRkoModel::class, 'rko_id');
    }

    public function targets()
    {
        return $this->hasOne(TargetRealisasiModel::class, 'rko_id');
    }
    public function pok()
    {
        return $this->belongsTo('App\Models\All\PokModel');
    }
}
