<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function listCompanies()
    {
        return view('companies', ['companies' => Company::all()]);
    }
}
