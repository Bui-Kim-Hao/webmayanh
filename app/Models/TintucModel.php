<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TintucModel extends Model
{
    //
    protected $table='tintuc';
    protected $primaryKey='matin';
    public function loaitin()
    {
        return $this->belongsTo(LoaitinModel::class,'maloaitin');
    }
    public function scopeSearch($query,$key)
    {
        $tintuc=$query->where('tentin','like','%'.$key.'%');
        return $tintuc;
    }
}
