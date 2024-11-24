<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product_Group;

class Product_Category extends Model
{
    use HasFactory;
    protected $table = 'product_category';
    //protected $primaryKey = 'id_loai_sp';
    protected $fillable = [
        'id_loai_sp',
        'tenloaisp',
        'trangthai',
        'anh_loaisp',
        'created_at',
        'updated_at'
    ];
 
    public function productGroups()
    {
        return $this->hasMany(Product_Group::class, 'id_loaisp', 'id_loai_sp');
    }
    
}
