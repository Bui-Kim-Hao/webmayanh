<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HoadonnhapModel extends Model
{
    //
    protected $table='hoadonnhap';
    protected $primaryKey='mahoadon';

    public function ncc(){
        return $this->belongsTo(SupplierModel::class,'manhacc');
    }
}
