<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'site',
    ];

    public function vacancies()
    {
        return $this->hasMany('App/Vacancy');
    }
}
