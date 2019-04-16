<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller ;
use Illuminate\Http\Request;

class ReportController extends AdminBase
{
    public function list()
    {   parent::check_module() ;
        return view('admin.report.list')  ;

    }
}
