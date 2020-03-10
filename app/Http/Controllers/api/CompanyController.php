<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function update(Request $request)
    {

        $company = Company::find(1);
        
        $company->fill($request->all())->save();

        return $company;
    
    }
}
