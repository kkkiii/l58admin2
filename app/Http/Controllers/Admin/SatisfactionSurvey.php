<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SatisfactionSurvey extends Controller
{
    public function company_advice()
    {
       return view('admin.satisfactionsurvey.company_advice')  ;

    }
    public function company_tipoff_gov()
    {
        echo 2 ;
    }

    public function consumer_advice()
    {
        return view('admin.satisfactionsurvey.consumer_advice')  ;
    }
    public function consumer_tipoff_company()
    {
        echo 4 ;
    }
    public function consumer_tipoff_gov()
    {
        echo 5 ;
    }
}
