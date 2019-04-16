<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoPubController extends AdminBase
{
    public function consume_warning()
    {
        parent::check_module() ;
        return view('admin.infopub.consume_warning')  ;

    }
    public function hot_consult()
    {   parent::check_module() ;
        return view('admin.infopub.hot_consult')  ;
    }
    public function gov_pub()
    {   parent::check_module() ;
        return view('admin.infopub.gov_pub')  ;
    }
}
