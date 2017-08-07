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
}
