<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpertJudgeController extends Controller
{
    public function apply()
    {
        return view('admin.expertjudge.apply')  ;

    }

    public function reply()
    {
        return view('admin.expertjudge.reply')  ;

    }

}
