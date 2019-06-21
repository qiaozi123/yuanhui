<?php

namespace App\Http\Controllers\M;

use App\Model\Lunbo;
use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $lunbo = Lunbo::all();
        $goods = Product::all();

        return view('m.index',compact('lunbo','goods'));
    }
}
