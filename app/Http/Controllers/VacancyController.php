<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Company;
use App\Vacancy;

class VacancyController extends Controller
{
    public function menu()
    {
        return view('home');
    }

    public function formNewVacancy()
    {
        return view('new-vacancy', [
            'companies' => Company::get(),
            'possible_status' => Vacancy::$possible_status,
        ]);
    }

    public function newVacancy(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:128',
            'description' => 'required',
            'status' => [
                'required',
                Rule::in(Vacancy::$possible_status)
            ],
            'link' => 'required|url',
            'company_id' => 'required|numeric'
        ]);

        Vacancy::create($request->all());

        return view('home');
    }
}
