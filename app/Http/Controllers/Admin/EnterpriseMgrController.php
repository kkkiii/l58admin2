<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller ;
use Illuminate\Http\Request;

class EnterpriseMgrController extends Controller
{
    public function user_list()
    {
        return view('admin.enterprisemgr.user_list')  ;

    }
    public function acct_list()
    {
        return view('admin.enterprisemgr.acct_list')  ;

    }
}
