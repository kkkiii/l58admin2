<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultController extends AdminBase
{
    public function visitors()
    {   parent::check_module() ;
        return view('admin.consult.visitors')  ;

    }
    public function offline()
    {   parent::check_module() ;
        return view('admin.consult.offline')  ;
    }

}
