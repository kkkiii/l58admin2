<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedBlackBoardController extends Controller
{
    public function red_top()
    {
        return view('admin.redblackboard.red_top')  ;

    }
    public function black_top()
    {
        return view('admin.redblackboard.black_top')  ;

    }

    public function prev()
    {
        return view('admin.redblackboard.prev')  ;

    }

}
