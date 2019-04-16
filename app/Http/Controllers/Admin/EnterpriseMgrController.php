<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller ;
use Illuminate\Http\Request;

class EnterpriseMgrController extends AdminBase
{
    public function user_list()
    {   parent::check_module() ;
        return view('admin.enterprisemgr.user_list')  ;

    }
    public function acct_list()
    {   parent::check_module() ;
        return view('admin.enterprisemgr.acct_list')  ;

    }
}
