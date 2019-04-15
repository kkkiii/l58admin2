<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\My\Helpers;
use Illuminate\Http\Request;

class VersionController extends Controller
{
    public function list()
    {
      
        return view('admin.version.list')  ;

    }

}
