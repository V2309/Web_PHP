<?php

namespace App\Http\Controllers;
use App\Models\Product_Category;
use App\Models\Product_Group;
use App\Models\ProductInfo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /** 
    * public function __construct()
   * {
    *    $this->middleware('auth');
    *}
    */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $products=ProductInfo::paginate(10);
        return view('pages.home',compact('products'));
    }
}
