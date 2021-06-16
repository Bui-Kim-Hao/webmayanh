<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SanphamModel extends Model
{
    //
    protected $table='sanpham';
    protected $primaryKey='masanpham';
    public function loaisp()
    {
        return $this->belongsTo(LoaisanphamModel::class,'maloai');
    }
    public function scopeSearch($query,$key)
    {
        $sanpham=$query->where('tensanpham','like','%'.$key.'%');
        return $sanpham;
    }
}
