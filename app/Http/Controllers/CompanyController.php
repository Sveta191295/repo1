<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function show(Company $company)
    {   
    
        return view('company.show', compact('company'));
       
    }
}
