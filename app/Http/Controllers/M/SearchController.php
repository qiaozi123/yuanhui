<?php

namespace App\Http\Controllers\M;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index()
    {
        return view('M.search.index');
    }
}
