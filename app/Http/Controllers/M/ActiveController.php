<?php

namespace App\Http\Controllers\M;

use App\Model\Lunbo;
use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActiveController extends Controller
{
    public function index($id)
    {
        if (empty($id)){
            return '没有该活动';
        }
        $data = Product::find($id);
        return view('m.active.index',compact('data'));
    }

}
