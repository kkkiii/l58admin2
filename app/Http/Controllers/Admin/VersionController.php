<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\My\Helpers;
use Illuminate\Http\Request;

class VersionController extends AdminBase
{
    public function list()
    {   parent::check_module() ;
      
        return view('admin.version.list')  ;

    }

}
