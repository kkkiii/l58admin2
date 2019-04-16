<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SatisfactionSurvey extends AdminBase
{
    public function company_advice()
    {   parent::check_module() ;
       return view('admin.satisfactionsurvey.company_advice')  ;

    }
    public function company_tipoff_gov()
    {   parent::check_module() ;
        echo 2 ;
    }

    public function consumer_advice()
    {   parent::check_module() ;
        return view('admin.satisfactionsurvey.consumer_advice')  ;
    }
    public function consumer_tipoff_company()
    {   parent::check_module() ;
        echo 4 ;
    }
    public function consumer_tipoff_gov()
    {   parent::check_module() ;
        echo 5 ;
    }
}
