<?php
/**
 * Created by PhpStorm.
 * User: 7
 * Date: 2019/4/11
 * Time: 18:55
 */

namespace App\My;
class AccessFilter
{
    public function filter()
    {
        return "/" ;


        $allow_arr  = (session('allow_routes')) ;
        $route =  MyStr::purify_admin_url() ;
        $route2 =  MyStr::purify_url_without_host() ;
//            Helpers::p($allow_arr) ;
//            Helpers::p($route) ;
//            Helpers::p($route2) ;
        if (!in_array($route, $allow_arr)
//            &&!in_array($route2, $pass_routes)
        )
            throw new HttpException(403,'不让访问');
    }

}
