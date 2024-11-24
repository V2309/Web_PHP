<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product_Category;

class Product_Group extends Model
{
    use HasFactory;
    protected $table = 'product_group';
   // protected $primaryKey = 'id_nhomsp';

    protected $fillable = [
        'id_nhomsp',
        'id_loaisp',
        'tennhom',
        'created_at',
        'updated_at',
        
       
    ];

    public function productCategory()
    {
        return $this->belongsTo(Product_Category::class, 'id_loaisp', 'id_loai_sp');
    }
}
