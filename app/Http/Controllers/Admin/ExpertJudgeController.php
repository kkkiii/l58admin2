<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpertJudgeController extends AdminBase
{
    public function apply()
    {   parent::check_module() ;
        return view('admin.expertjudge.apply')  ;

    }

    public function reply()
    {   parent::check_module() ;
        return view('admin.expertjudge.reply')  ;

    }

}
