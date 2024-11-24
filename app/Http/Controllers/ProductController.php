<?php

namespace App\Http\Controllers;
use App\Models\ProductInfo;
use App\Models\Product_Category;
use App\Models\Product_Group;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function productcategory($id_nhomsp)
    {
        // Lấy sản phẩm dựa trên id_nhomsp
        $products = ProductInfo::where('id_nhomsp', $id_nhomsp)->get();
    
        // Lấy thông tin nhóm sản phẩm để hiển thị danh mục bên trái
        $categories = Product_Category::all();
        $groups = Product_Group::with('productCategory')->get();
        $namepro = Product_Group::where('id_nhomsp', $id_nhomsp)->first();;
        session(['product_group' => $namepro]);
    
        return view('pages.productcategory', compact('categories', 'products','groups'));
    }
    


}
