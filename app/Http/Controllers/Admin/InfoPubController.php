<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoPubController extends Controller
{
    public function consume_warning()
    {
        return view('admin.infopub.consume_warning')  ;

    }
    public function hot_consult()
    {
        return view('admin.infopub.hot_consult')  ;
    }
    public function gov_pub()
    {
        return view('admin.infopub.gov_pub')  ;
    }
}
