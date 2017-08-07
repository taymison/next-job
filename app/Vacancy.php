<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'description',
        'link',
        'date',
        'status',
    ];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function benefits()
    {
        return $this->belongsToMany('App\Benefit');
    }
}
