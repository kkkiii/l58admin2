<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller ;
use Illuminate\Http\Request;

class LinkageOrgController extends Controller
{
    public function list()
    {
        return view('admin.linkageorg.list')  ;

    }
}
