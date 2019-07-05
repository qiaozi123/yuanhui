<?php

namespace App\Http\Controllers\M;

use App\Model\Lunbo;
use App\Model\Product;
use App\Model\ProductImages;
use App\Model\ProductItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodController extends Controller
{
    public function index($id)
    {
        if (empty($id)){
            return '没有该商品';
        }
        $data = Product::find($id);
        $goodimg = ProductImages::where(['商品id'=>$id])->get();
        $productdata = ProductItem::where(['product_id'=>$id])->get();
        return view('m.good',compact('data','goodimg','productdata'));
    }

    public function fenlei()
    {
        $data = Product::all();
        return view('m.fenlei',compact('data'));
    }
}
