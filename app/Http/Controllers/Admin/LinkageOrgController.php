<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller ;
use Illuminate\Http\Request;

class LinkageOrgController extends AdminBase
{
    public function list()
    {   parent::check_module() ;
        return view('admin.linkageorg.list')  ;

    }
}
