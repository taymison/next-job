<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewVacancyRequest;

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

    public function newVacancy(NewVacancyRequest $request)
    {
        Vacancy::create($request->all());
        return view('home');
    }
}
