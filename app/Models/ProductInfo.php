<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInfo extends Model
{
    use HasFactory;
    protected $table = 'productinfo';
    protected $primaryKey = 'id_sanpham';
    protected $fillable = [
        'id_sanpham',
        'ten_sanpham',
        'gia_moi',
        'gia_cu',
        'id_loai_sanpham',
        'hinh_sanpham',
        'hinh_quatang',
        'thongtin_km',
        'so_luong',
        'id_nhomsp',

        'created_at',
        'updated_at'
    ];

    public function productgroup()
    {
        return $this->belongsTo(Product_Group::class, 'id_nhomsp', 'id_nhomsp');
    }
    
    

}
