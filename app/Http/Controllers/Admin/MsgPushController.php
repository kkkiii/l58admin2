<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MsgPushController extends Controller
{
    public function list()
    {
        return view('admin.msgpush.list')  ;

    }

}
