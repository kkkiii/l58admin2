<?php

namespace App\Http\Controllers\Admin;
use App\Model\Menu;
use App\My\Helpers ;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL ;
use Illuminate\Support\Facades\DB ;
use Illuminate\Support\Facades\Redirect ;
use App\My\MyStr ;
class ConsumerController extends AdminBase
{
    public function __construct()
    {
        $this->middleware('auth',[
            'only'=>['list','lock']
        ]);

    }

    public function list(){
        parent::check_module() ;
        $consumers = DB::table('consumers')->paginate(15);
        return view('admin.consumer.list', ['consumers' => $consumers]);
    }
    public function lock($id){
        parent::check_module() ;
        DB::table('consumers')
            ->where('id', $id)
            ->update(['is_lock' => 1]);
        return Redirect::to('admin/consumer.list');
    }


    public function del($id){
        parent::check_module() ;
        DB::table('consumers')->where('id', $id)->delete();

        return Redirect::to('admin/consumer.list');
    }


}
