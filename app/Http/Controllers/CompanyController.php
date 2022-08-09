<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function show($id)
    {
        $company = Company::find($id);
        if($company){
            return view('nhaThau.view', ['company' => $company]);
        }else{
            return abort('404');
        }
    }
}
