<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Requests\NewCompanyRequest;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function listCompanies()
    {
        return view('companies', ['companies' => Company::all()]);
    }

    public function newCompany(NewCompanyRequest $request)
    {
        Company::create($request->all());
        return redirect('companies');
    }
}
