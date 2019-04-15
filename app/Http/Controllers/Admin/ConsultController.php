<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultController extends Controller
{
    public function visitors()
    {
        return view('admin.consult.visitors')  ;

    }
    public function offline()
    {
        return view('admin.consult.offline')  ;
    }

}
