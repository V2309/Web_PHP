<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductInfo;
use App\Models\Product_Category;
use App\Models\Product_Group;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        return view('admins.dashboard');
    }
    
    public function productlists()
    {   
        $products=ProductInfo::paginate(3);
        
        return view('admins.productlists',compact('products'));
    }
    public function createproduct()
    {
        $product_category=Product_Category::all();
        $product_group=Product_Group::all();
        return view('admins.createproduct',compact('product_category','product_group'));
    }
}
