<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends AdminBase
{
    public function list()
    {
        parent::check_module() ;
        return view('admin.brand.list')  ;

    }

}
