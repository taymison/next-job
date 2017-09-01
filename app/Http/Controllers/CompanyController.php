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
        return redirect()->route('companies');
    }

    public function deleteCompany($id)
    {
        Company::destroy($id);
        return redirect()->route('companies');
    }

    public function editCompany($id)
    {
        return view('companies', [
            'companies' => $companies = Company::all(),
            'company' => $companies->find($id)
        ]);
    }

    public function updateCompany(NewCompanyRequest $request)
    {
        Company::updateOrCreate(
            ['id' => $request->id],
            $request->all()
        );
        return redirect()->route('companies');
    }
}
