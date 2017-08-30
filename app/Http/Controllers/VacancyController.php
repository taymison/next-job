<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewVacancyRequest;

use App\Company;
use App\Vacancy;

class VacancyController extends Controller
{
    private $companies;
    private $possible_status;

    public function __construct()
    {
        $this->companies = Company::get();
        $this->possible_status = Vacancy::$possible_status;
    }
    
    public function menu()
    {
        return view('home');
    }

    public function formNewVacancy()
    {
        return view('new-vacancy', [
            'companies' => $this->companies,
            'possible_status' => $this->possible_status,
        ]);
    }

    public function newVacancy(NewVacancyRequest $request)
    {
        Vacancy::create($request->all());
        return redirect('vacancy');
    }
}
