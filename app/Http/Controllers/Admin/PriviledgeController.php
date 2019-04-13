<?php

namespace App\Http\Controllers\Admin;
use App\Model\AdminRole;
use App\My\Helpers ;
use function Couchbase\defaultDecoder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL ;
use Illuminate\Support\Facades\DB ;
class PriviledgeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',[
            'only'=>['list']
        ]);

    }

    public function list(){


//        $url = URL::current() ;
//     $res =   Helpers::str_retrive_left($url , '/') ;
//print_r($res) ; die() ;


//        var_dump($url) ;
//        $pos = strrpos ($url,'/') ;
//        var_dump($pos) ;
//      print_r(  substr($url , $pos) );
//
//        die() ;

        return view('admin.priviledge.list') ;
    }
    public function roles(){

        $roles = DB::table('admin_roles')->paginate(10);
        return view('admin.priviledge.roles', ['roles' => $roles]);

    }
    public function add_role(){

//dd('add_role') ;
        return view('admin.priviledge.add_role');

    }
    public function add_role_post(Request $request){
        $data = $this->validate($request,[
            'name'=>'required|min:5',
            'remark'=>'required|min:8',
        ]) ;



        dd($data) ;



        if(1)
        {

            session()->flash(
                'success','登陆成功'
            ) ;
            return redirect('/' ) ;
        }
        else
        {
            session()->flash(
                'success','登陆失败'
            ) ;
            return back() ;
        }

    }

    public function edit_role($id){

        $role = DB::table('admin_roles')->where('id', $id)->first();
        return view('admin.priviledge.edit_role', ['role' => $role]);

    }
    public function edit_role_post(Request $request){

//        $roles = DB::table('admin_roles')->paginate(10);
//        return view('admin.priviledge.roles', ['roles' => $roles]);
        $id =$request->input('id');
        $name =$request->input('name');
        var_dump($name) ;
        $remark =$request->input('remark');
        var_dump($remark) ;


        $admin_role = AdminRole::find($id);
        $admin_role->name = $name ;
        $admin_role->remark = $remark ;
        $admin_role->save();
//        $post->title = '测试文章标题';
//        $post->content = '测试文章内容';
//        $post->user_id = 1;
//        $post->save();
        return redirect(route('priviledge.roles'));

    }
    public function del(Request $request,$id){
      $admin_role =  AdminRole::find($id);
        $admin_role->delete();
        return redirect(route('priviledge.roles'));
    }

}
