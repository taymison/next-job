<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Company;

class VacancyController extends Controller
{
    public function menu()
    {
        return view('home');
    }

    public function formNewVacancy()
    {
        return view('new-vacancy', ['companies' => Company::get()]);
    }

    public function newVacancy(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:128',
            'description' => 'required',
            'status' => [
                'required',
                Rule::in(['open', 'resume submitted', 'scheduled interview', 'performed interview', 'closed'])
            ],
            'link' => 'required|url',
            'company_id' => 'required|numeric'
        ]);

        Company::create($request->all());

        return view('home');
    }
}
