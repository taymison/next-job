<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];

    public function vacancies()
    {
        return $this->belongsToMany('App\Vacancy');
    }

    public function vacanciesRequirements()
    {
        return $this->belongsToMany('App\Vacancy', 'requirements');
    }

    public function vacanciesDifferentials()
    {
        return $this->belongsToMany('App\Vacancy', 'differentials');
    }
}
