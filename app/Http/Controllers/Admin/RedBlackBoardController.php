<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedBlackBoardController extends AdminBase
{
    public function red_top()
    {   parent::check_module() ;
        return view('admin.redblackboard.red_top')  ;

    }
    public function black_top()
    {   parent::check_module() ;
        return view('admin.redblackboard.black_top')  ;

    }

    public function prev()
    {   parent::check_module() ;
        return view('admin.redblackboard.prev')  ;

    }

}
